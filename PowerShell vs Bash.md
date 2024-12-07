# Unterschiede zwischen PowerShell und Linux Bash Commands mit grundlegenden Vergleichen

PowerShell und Bash sind Shell-Umgebungen mit unterschiedlichen Ursprüngen: PowerShell stammt aus der Windows-Welt und basiert auf dem .NET Framework, während Bash (Bourne Again Shell) eine der meistgenutzten Shells in Unix- und Linux-Systemen ist. Hier ein Vergleich anhand von 10 grundlegenden Befehlen:

| **Funktion**                  | **Linux (Bash)**      | **Windows (PowerShell)**           |
|-------------------------------|-----------------------|-------------------------------------|
| **Liste von Dateien anzeigen**| `ls`                 | `Get-ChildItem` oder `ls`          |
| **Arbeitsverzeichnis anzeigen**| `pwd`                | `Get-Location` oder `pwd`          |
| **Verzeichnis wechseln**      | `cd`                 | `cd`                               |
| **Datei kopieren**            | `cp source target`   | `Copy-Item source target`          |
| **Datei verschieben**         | `mv source target`   | `Move-Item source target`          |
| **Datei löschen**             | `rm file`            | `Remove-Item file`                 |
| **Text in Datei schreiben**   | `echo "text" > file` | `Set-Content file "text"`          |
| **Dateiinhalt anzeigen**      | `cat file`           | `Get-Content file`                 |
| **Prozesse anzeigen**         | `ps`                 | `Get-Process`                      |
| **Netzwerkverbindungen prüfen**| `netstat`           | `Get-NetTCPConnection`             |

## Wichtige Unterschiede
1. **Objekte vs. Text:** 
   - Bash arbeitet primär mit Textstreams.
   - PowerShell arbeitet mit Objekten, was bedeutet, dass Befehle strukturierte Daten wie Tabellen oder Objekte zurückgeben.
2. **Kommandosyntax:**
   - Bash verwendet einfache Kommandos und viele Optionen/Flags (z. B. `ls -la`).
   - PowerShell hat ausführliche Cmdlets mit `Verb-Nomen`-Syntax (z. B. `Get-ChildItem`).
3. **Plattform:**
   - Bash ist native auf Linux/Unix, kann aber auch in Windows (WSL) verwendet werden.
   - PowerShell ist auf Windows vorinstalliert, funktioniert aber auch plattformübergreifend.

**Hinweis:** Viele Bash-Befehle sind durch Aliase auch in PowerShell verfügbar (z. B. `ls`, `pwd`).

---

# Vergleich grundlegender Shell-Befehle in Linux (Bash) und Windows (CMD)

Die grundlegenden Shell-Befehle von Linux (Bash) und Windows (CMD) unterscheiden sich deutlich in ihrer Syntax und Funktionsweise. Windows verwendet oft ausführlichere Begriffe, während Linux-Kommandozeilenbefehle meist kürzer sind.

| **Funktion**                  | **Linux (Bash)** | **Windows (CMD)** | **Unterschiede in Funktion und Syntax**                                                                                                                                     |
|-------------------------------|------------------|-------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Dateien/Ordner anzeigen**   | `ls`            | `dir`             | `ls` ist kurz und modular; `dir` zeigt detailliertere Informationen und wird seltener mit zusätzlichen Optionen verwendet.                                                 |
| **Arbeitsverzeichnis anzeigen** | `pwd`           | `cd` (ohne Arg.)  | `pwd` zeigt das Arbeitsverzeichnis explizit an; bei Windows muss `cd` ohne Argumente genutzt werden.                                                                      |
| **Verzeichnis wechseln**      | `cd`            | `cd`              | Syntax ist identisch, jedoch müssen in Windows Pfade mit `\` anstelle von `/` geschrieben werden.                                                                          |
| **Datei erstellen**           | `touch file`    | `echo. > file`    | `touch` ist intuitiv und erzeugt eine leere Datei; `echo. > file` ist weniger offensichtlich und erzeugt die Datei mit einem leeren Inhalt.                                |
| **Dateiinhalt anzeigen**      | `cat file`      | `type file`       | `cat` ist ein vielseitiges Werkzeug zur Anzeige und Manipulation von Inhalten; `type` ist auf das Anzeigen von Datei-Inhalten begrenzt.                                   |
| **Datei löschen**             | `rm file`       | `del file`        | Beide löschen Dateien, jedoch ist `rm` in Bash vielseitiger (z. B. für rekursive Löschvorgänge).                                                                          |
| **Verzeichnis löschen**       | `rm -r dir`     | `rmdir /s dir`    | `rmdir` in Windows benötigt den `/s`-Schalter für rekursives Löschen, während `rm -r` ohne zusätzliche Werkzeuge auskommt.                                                |
| **Datei kopieren**            | `cp source dest`| `copy source dest`| Beide kopieren Dateien, wobei die Syntax weitgehend ähnlich ist; Windows benötigt für Verzeichnisse jedoch `xcopy` oder `robocopy`.                                       |
| **Prozesse anzeigen**         | `ps`            | `tasklist`        | `ps` zeigt Prozesse kompakt an und erlaubt zahlreiche Optionen; `tasklist` gibt standardmäßig detaillierte Informationen aus.                                             |
| **Netzwerkverbindungen prüfen** | `netstat`       | `netstat`         | Der Befehl ist in beiden Umgebungen identisch, allerdings unterscheiden sich Optionen und Ausgabeformat zwischen Linux und Windows.                                       |

## Wichtige Unterschiede

1. **Schreibweise:**
   - Linux verwendet `/` als Verzeichnistrenner, Windows nutzt `\`.
   - Linux-Befehle sind meist kürzer und case-sensitive; Windows-Befehle sind nicht case-sensitive.

2. **Optionen/Parameter:**
   - Linux verwendet oft Flags mit einem Bindestrich (z. B. `-l`), Windows nutzt Schalter mit `/` (z. B. `/s`).

3. **Vielseitigkeit:**
   - Linux-Befehle (z. B. `ls`, `rm`) sind modular und können mit zusätzlichen Flags vielseitig angepasst werden.
   - Windows-Befehle sind spezifischer und benötigen für erweiterte Funktionen oft externe Tools (z. B. `xcopy`, `robocopy`).


**Autor:** Marcel Roger Dorr