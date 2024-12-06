# Was ist WSL und warum ist es wichtig?

**WSL** (Windows Subsystem for Linux) ist eine Funktion von Microsoft Windows, die es Nutzern ermöglicht, eine vollständige Linux-Umgebung direkt auf Windows zu betreiben, ohne eine virtuelle Maschine oder ein Dual-Boot-System zu benötigen. WSL ermöglicht es Entwicklern, Linux-basierte Anwendungen und Tools direkt auf Windows auszuführen, sodass sie die Vorteile beider Betriebssysteme nutzen können.

## Funktionsweise von WSL

WSL integriert einen Linux-Kernel direkt in Windows, sodass Benutzer Linux-Distributionen (wie Ubuntu, Debian oder Fedora) über den Microsoft Store installieren und ausführen können. **WSL 2**, die zweite Version von WSL, führt einen echten Linux-Kernel ein und verbessert die Leistung und Kompatibilität im Vergleich zu **WSL 1**, das eine emulierte Umgebung nutzte.

Weitere Informationen zur Funktionsweise von WSL 2 findest du in der [Microsoft-Dokumentation zu WSL](https://learn.microsoft.com/en-us/windows/wsl/install) und in einem Artikel über die Unterschiede zwischen WSL 1 und WSL 2 von [Microsoft Tech Community](https://techcommunity.microsoft.com/t5/azure-developer-community/wsl-2-is-here/ba-p/1616062).

## Wichtige Funktionen und Vorteile

1. **Zugriff auf Linux-Tools und -Anwendungen:** Entwickler können Linux-basierte Tools und Anwendungen auf Windows nutzen, ohne ein separates Linux-System oder eine virtuelle Maschine einzurichten. ([Microsoft](https://learn.microsoft.com/en-us/windows/wsl/))

2. **Nahtlose Integration zwischen Windows und Linux:** Benutzer können sowohl Windows- als auch Linux-Tools gleichzeitig verwenden. Beispielsweise können Linux-Befehle in der Windows-Eingabeaufforderung ausgeführt werden, und Dateien können problemlos zwischen den Systemen geteilt werden. ([Microsoft WSL-Dokumentation](https://learn.microsoft.com/en-us/windows/wsl/interop))

3. **Entwicklerfreundlichkeit:** Viele Open-Source-Tools und Frameworks, die in der Softwareentwicklung und DevOps verwendet werden (wie Docker, Git, Python), sind direkt unter Windows über WSL zugänglich. ([WSL für Entwickler - Microsoft](https://learn.microsoft.com/en-us/windows/dev-environment/linux-development-with-wsl))

4. **Leistungsverbesserung (WSL 2):** Durch die Einführung eines echten Linux-Kernels in **WSL 2** werden viele Linux-native Anwendungen und Tools erheblich schneller ausgeführt als in **WSL 1**. Weitere Details zur Leistungsverbesserung findest du in [diesem Artikel von Microsoft](https://learn.microsoft.com/en-us/windows/wsl/install).

5. **Kostengünstiger als virtuelle Maschinen:** WSL benötigt weniger Systemressourcen als eine vollständige virtuelle Maschine. Dies spart Ressourcen, während gleichzeitig die volle Funktionalität einer Linux-Umgebung genutzt werden kann. ([Microsoft WSL FAQ](https://learn.microsoft.com/en-us/windows/wsl/faq))

## Bedeutung von WSL

1. **Vereinfachung der Entwicklung:** Viele Entwickler benötigen Zugang zu Linux-Umgebungen für die Entwicklung, insbesondere bei der Arbeit mit Webservern, Datenbanken oder Cloud-Diensten. WSL ermöglicht dies ohne den Aufwand, eine separate Linux-Installation zu verwalten.

2. **Cross-Plattform-Entwicklung:** Entwickler, die Anwendungen für mehrere Plattformen (Windows, Linux, macOS) erstellen müssen, können mit WSL ihre Tools und Skripte auf einer einzigen Plattform testen, was den Entwicklungsprozess vereinfacht.

3. **Erhöhte Flexibilität:** WSL erlaubt es Windows-Nutzern, von den Vorteilen beider Welten zu profitieren und ohne großen Aufwand zwischen den beiden Betriebssystemen zu wechseln. Dies ist besonders nützlich für Entwickler, die regelmäßig zwischen Windows und Linux arbeiten müssen. ([Microsoft WSL-Übersicht](https://learn.microsoft.com/en-us/windows/wsl/))

4. **Förderung von Open-Source und Linux-Tools:** WSL hat die Verwendung von Open-Source-Tools auf Windows weiter verbreitet und damit zur stärkeren Akzeptanz von Linux-Technologien auf der Windows-Plattform beigetragen.

## Fazit

**WSL** ist ein wichtiges Tool für Entwickler, die auf Windows arbeiten, aber oft mit Linux-Umgebungen oder -Anwendungen zu tun haben. Es erleichtert die Entwicklung und verbessert die Produktivität, ohne die Notwendigkeit, zwischen verschiedenen Systemen hin und her zu wechseln.



# Anleitung: Installation und Nutzung von WSL (Windows Subsystem for Linux)

## Schritt 1: WSL aktivieren
1. **PowerShell als Administrator öffnen**:
   - Klicke auf die Starttaste.
   - Suche nach "PowerShell".
   - Wähle "Als Administrator ausführen".
2. **WSL installieren**:
   Führe folgenden Befehl aus:
   ```powershell
   wsl --install
   ```
   - Dies aktiviert WSL, installiert WSL 2 und fügt standardmäßig **Ubuntu** als Linux-Distribution hinzu.
   - Wenn alles fertig ist, starte deinen Computer neu.

---

## Schritt 2: Linux-Distribution einrichten
1. Nach dem Neustart öffnet sich ein Fenster zur Einrichtung von Ubuntu (oder einer anderen Distribution).
2. Folge den Anweisungen:
   - **Benutzername festlegen**: Gib einen gewünschten Namen ein.
   - **Passwort setzen**: Wähle ein Passwort (wird bei Bedarf für Admin-Aufgaben in Linux verwendet).

---

## Schritt 3: WSL starten
- Öffne deine Linux-Distribution:
  - Suche im Startmenü nach der installierten Distribution (z. B. "Ubuntu").
  - Alternativ kannst du die PowerShell/Eingabeaufforderung verwenden:
    ```powershell
    wsl
    ```
  - Jetzt bist du in der Linux-Umgebung und kannst Linux-Befehle verwenden!

---

## Schritt 4: Nützliche Befehle für WSL
Hier sind ein paar Befehle, die dir bei der Nutzung von WSL helfen können:

1. **Verfügbare Distributionen anzeigen**:
   ```powershell
   wsl --list --verbose
   ```
   - Zeigt eine Liste aller installierten Distributionen und deren Status.

2. **Linux-Distribution ändern oder upgraden**:
   ```powershell
   wsl --set-version <Distribution-Name> 2
   ```
   - Ersetze `<Distribution-Name>` durch den Namen deiner Distribution (z. B. "Ubuntu").
   - Dieser Befehl stellt sicher, dass du WSL 2 (die neuere Version) verwendest.

3. **Linux-Dateisystem durchsuchen**:
   - Du kannst auf Linux-Dateien direkt über den Windows-Explorer zugreifen:
     - Öffne den Explorer und gib in die Adressleiste ein:
       ```
       \wsl$
       ```

4. **WSL beenden**:
   ```powershell
   wsl --shutdown
   ```

---

## Schritt 5: Weitere Distributionen installieren
Falls du eine andere Linux-Distribution ausprobieren möchtest:
1. Öffne den **Microsoft Store**.
2. Suche nach Distributionen wie **Debian**, **Kali Linux** oder **openSUSE**.
3. Installiere die gewünschte Distribution und richte sie wie oben beschrieben ein.

---

## Schritt 6: Tipps und Tricks
- **Standard-Distribution ändern**:
  ```powershell
  wsl --set-default <Distribution-Name>
  ```
- **Grafische Linux-Apps verwenden**:
  WSL 2 unterstützt GUI-Anwendungen unter Linux. Installiere einfach die benötigten Pakete (z. B. `sudo apt install gedit`), und starte sie aus der WSL-Umgebung.

- **Offizielle Dokumentation**:
  Für detaillierte Informationen und Problembehebung besuche die [offizielle WSL-Seite](https://aka.ms/wsl).

---

Jetzt bist du bereit, WSL voll auszunutzen und Linux auf Windows zu erleben!




**Autor:** Marcel Roger Dorr