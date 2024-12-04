# Was ist PowerShell?

**PowerShell** ist ein plattformübergreifendes Automatisierungsframework und Skripting-Tool von Microsoft. Es dient zur Verwaltung, Konfiguration und Automatisierung von Systemen und Anwendungen. PowerShell kombiniert eine leistungsstarke **Kommandozeilenschnittstelle (CLI)** mit einer **Skriptsprache**, die auf der .NET- und später der .NET Core-Plattform basiert.

## Eigenschaften von PowerShell:
- **Plattformübergreifend**: Verfügbar auf Windows, macOS und Linux.
- **Objektorientiert**: Arbeitet mit .NET-Objekten, was die Verarbeitung und Manipulation von Daten erleichtert.
- **Automatisierung**: Ideal für die Automatisierung von Verwaltungsaufgaben wie Benutzerverwaltung, Softwareinstallation oder Netzwerkkonfiguration.
- **Erweiterbar**: Benutzer können eigene Module, Skripte und Cmdlets erstellen.
- **Integrierte Sicherheit**: Unterstützt rollenbasierte Zugriffskontrolle und sichere Skriptausführung.

---

# Nützliche Befehle in PowerShell

PowerShell-Befehle werden als **Cmdlets** bezeichnet. Sie folgen in der Regel der Struktur `Verb-Substantiv` (z. B. `Get-Process`), was sie intuitiver macht. Hier ist eine Übersicht über einige häufig genutzte Befehle:

## Verzeichnis- und Dateioperationen:
- **`mkdir`**  
  - Erstellt einen neuen Ordner im aktuellen Verzeichnis oder an einem angegebenen Pfad.  
  - Beispiel:  
    ```powershell
    mkdir C:\BeispielOrdner
    ```

- **`Get-ChildItem`**  
  - Listet den Inhalt eines Verzeichnisses auf (vergleichbar mit `ls` in Unix).  
  - Beispiel:  
    ```powershell
    Get-ChildItem -Path C:\Users
    ```

- **`Remove-Item`**  
  - Löscht Dateien oder Ordner.  
  - Beispiel:  
    ```powershell
    Remove-Item -Path C:\Test -Recurse
    ```

- **`Copy-Item`**  
  - Kopiert eine Datei oder ein Verzeichnis an einen neuen Ort.  
  - Beispiel:  
    ```powershell
    Copy-Item -Path C:\Quelle\Datei.txt -Destination C:\Ziel
    ```

- **`Move-Item`**  
  - Verschiebt eine Datei oder ein Verzeichnis.  
  - Beispiel:  
    ```powershell
    Move-Item -Path C:\Quelle\Datei.txt -Destination C:\Ziel
    ```

## Systeminformationen und Prozesse:
- **`Get-Process`**  
  - Zeigt eine Liste der laufenden Prozesse an.  
  - Beispiel:  
    ```powershell
    Get-Process
    ```

- **`Stop-Process`**  
  - Beendet einen laufenden Prozess.  
  - Beispiel:  
    ```powershell
    Stop-Process -Name notepad
    ```

- **`Get-Service`**  
  - Zeigt eine Liste der installierten Dienste und deren Status.  
  - Beispiel:  
    ```powershell
    Get-Service
    ```

- **`Start-Service`** / **`Stop-Service`**  
  - Startet bzw. stoppt einen Dienst.  
  - Beispiel:  
    ```powershell
    Start-Service -Name wuauserv
    ```

## Skripting und Automatisierung:
- **`Write-Output`**  
  - Gibt Text oder Objekte an die Konsole aus.  
  - Beispiel:  
    ```powershell
    Write-Output "Hallo, PowerShell!"
    ```

- **`Read-Host`**  
  - Ermöglicht Benutzereingaben während der Skriptausführung.  
  - Beispiel:  
    ```powershell
    $name = Read-Host "Geben Sie Ihren Namen ein"
    Write-Output "Hallo, $name!"
    ```

- **`Start-Job`**  
  - Führt einen Befehl oder ein Skript im Hintergrund aus.  
  - Beispiel:  
    ```powershell
    Start-Job -ScriptBlock { Get-ChildItem -Recurse }
    ```

- **`Invoke-Command`**  
  - Führt Befehle auf entfernten Computern aus.  
  - Beispiel:  
    ```powershell
    Invoke-Command -ComputerName "Server01" -ScriptBlock { Get-Service }
    ```
