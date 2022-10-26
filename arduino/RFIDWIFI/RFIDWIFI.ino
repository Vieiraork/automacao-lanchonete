#include <SPI.h>
#include <MFRC522.h>
#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>

constexpr uint8_t RST_PIN = D3;     // Configurable, see typical pin layout above
constexpr uint8_t SS_PIN = D4;     // Configurable, see typical pin layout above

const char* rede = "";
const char* senha = "";

ESP8266WiFiMulti WiFiMulti;

MFRC522 rfid(SS_PIN, RST_PIN); // Instance of the class
MFRC522::MIFARE_Key key;

String tag;

void setup() {
  int loadDot = 0;
  Serial.begin(9600);
  SPI.begin(); // Init SPI bus
  rfid.PCD_Init(); // Init MFRC522
  
  for (uint8_t t = 4; t > 0; t--) {
    Serial.printf("[SETUP] WAIT %d...\n", t);
    Serial.flush();
    delay(1000);
  }
  
  WiFi.mode(WIFI_STA);
  WiFi.begin(rede, senha);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
    
    loadDot++;
  }
  Serial.print("Wifi status: ");
  Serial.println("connected");
}
void loop() {
  WiFiClient client;

  HTTPClient http;
  //Serial.print("Ip local: ");
  //Serial.println(WiFi.localIP());
  
  if ( ! rfid.PICC_IsNewCardPresent())
    return;
  if (rfid.PICC_ReadCardSerial()) {
    for (byte i = 0; i < 4; i++) {
      tag += rfid.uid.uidByte[i];
    }
    Serial.println(tag);
  
  if (http.begin(client, "{ip_computer}/lanchonete/pedido?tag=" + tag)) {
      int code = http.GET();
      String res = http.getString();

      if (code > 0) {
        Serial.print("Http code: ");
        Serial.println(code);
        Serial.print("Response: ");
        Serial.println(res);
      } else {
        Serial.print("Error: ");
        Serial.println("Não foi possível obter a resposta.");
      }
    }
  
    tag = "";
    rfid.PICC_HaltA();
    rfid.PCD_StopCrypto1();
  }
  delay(1000);
}
