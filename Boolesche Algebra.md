# Grundlagen der Booleschen Algebra
Die Boolesche Algebra arbeitet mit den Werten **Wahr (1)** und **Falsch (0)** und verwendet logische Operatoren:

- **UND (AND, ∧):** Beide Bedingungen müssen wahr sein.
- **ODER (OR, ∨):** Mindestens eine Bedingung muss wahr sein.
- **NICHT (NOT, ¬):** Negiert den Wahrheitswert.

Beispiel:
- \`A ∧ B\` ist nur wahr, wenn sowohl \`A = 1\` als auch \`B = 1\`.
- \`A ∨ B\` ist wahr, wenn mindestens eines wahr ist.

## Wichtige Gesetze der Booleschen Algebra

1. **De Morgan'sche Gesetze**
   - \`¬(A ∧ B) = ¬A ∨ ¬B\`
   - \`¬(A ∨ B) = ¬A ∧ ¬B\`

2. **Idempotenzgesetze**
   - \`A ∧ A = A\`
   - \`A ∨ A = A\`

3. **Absorptionsgesetz**
   - \`A ∨ (A ∧ B) = A\`

4. **Neutralität**
   - \`A ∨ 0 = A\`
   - \`A ∧ 1 = A\`

## Wahrheitstabellen
Eine Wahrheitstabelle zeigt die Ergebnisse für alle möglichen Kombinationen von Eingabewerten.

### Beispiel: AND (A ∧ B)
| A | B | A ∧ B |
|---|---|-------|
| 0 | 0 |   0   |
| 0 | 1 |   0   |
| 1 | 0 |   0   |
| 1 | 1 |   1   |

### Beispiel: OR (A ∨ B)
| A | B | A ∨ B |
|---|---|-------|
| 0 | 0 |   0   |
| 0 | 1 |   1   |
| 1 | 0 |   1   |
| 1 | 1 |   1   |

## Praktische Tipps
1. **Gesetze anwenden:** Vereinfachung von Ausdrücken durch logische Gesetze.
2. **Simulation nutzen:** Programme wie Logisim oder Logicly.
3. **Üben:** Löse Aufgaben zur Vereinfachung und baue Wahrheitstabellen.

## Anwendungen
Die Boolesche Algebra wird verwendet in:
- Digitaltechnik (z. B. Schaltkreise).
- Programmierung (z. B. If-Bedingungen).
- Suchmaschinen (z. B. mit AND, OR, NOT).



**Autor:** Marcel Roger Dorr