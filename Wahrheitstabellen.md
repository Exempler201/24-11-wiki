
# Wahrheitstabellen für logische Ausdrücke

## Aufgabe 1: Grundlegende Operatoren mit NICHT (¬A ∧ B)

| A   | B   | ¬A  | ¬A ∧ B |
|-----|-----|-----|--------|
| =TRUE | =TRUE | =NOT(A2) | =AND(C2:B2) |
| =TRUE | =FALSE| =NOT(A3) | =AND(C3:B3) |
| =FALSE| =TRUE | =NOT(A4) | =AND(C4:B4) |
| =FALSE| =FALSE| =NOT(A5) | =AND(C5:B5) |

---

## Aufgabe 2: Einführung in drei Variablen ((A ∨ B) ∧ (¬A ∨ B))

| A   | B   | C   | A ∨ B | ¬A  | ¬A ∨ B | (A ∨ B) ∧ (¬A ∨ B) |
|-----|-----|-----|-------|-----|--------|--------------------|
| =TRUE | =TRUE | =TRUE  | =OR(A2:B2) | =NOT(A2) | =OR(E2:B2) | =AND(D2:F2) |
| =TRUE | =TRUE | =FALSE | =OR(A3:B3) | =NOT(A3) | =OR(E3:B3) | =AND(D3:F3) |
| =TRUE | =FALSE| =TRUE  | =OR(A4:B4) | =NOT(A4) | =OR(E4:B4) | =AND(D4:F4) |
| =TRUE | =FALSE| =FALSE | =OR(A5:B5) | =NOT(A5) | =OR(E5:B5) | =AND(D5:F5) |
| =FALSE| =TRUE | =TRUE  | =OR(A6:B6) | =NOT(A6) | =OR(E6:B6) | =AND(D6:F6) |
| =FALSE| =TRUE | =FALSE | =OR(A7:B7) | =NOT(A7) | =OR(E7:B7) | =AND(D7:F7) |
| =FALSE| =FALSE| =TRUE  | =OR(A8:B8) | =NOT(A8) | =OR(E8:B8) | =AND(D8:F8) |
| =FALSE| =FALSE| =FALSE | =OR(A9:B9) | =NOT(A9) | =OR(E9:B9) | =AND(D9:F9) |

---

## Aufgabe 3: XOR mit drei Variablen ((A ∨ B) ∧ ¬(A ∧ B) ⊕ (A ∨ C))

| A   | B   | C   | A ∨ B | A ∧ B | ¬(A ∧ B) | (A ∨ B) ∧ ¬(A ∧ B) | A ∨ C | ⊕ |
|-----|-----|-----|-------|-------|----------|---------------------|-------|---|
| =TRUE | =TRUE | =TRUE  | =OR(A2:B2) | =AND(A2:B2) | =NOT(E2) | =AND(D2:F2) | =OR(A2:C2) | =XOR(G2:H2) |
| =TRUE | =TRUE | =FALSE | =OR(A3:B3) | =AND(A3:B3) | =NOT(E3) | =AND(D3:F3) | =OR(A3:C3) | =XOR(G3:H3) |
| =TRUE | =FALSE| =TRUE  | =OR(A4:B4) | =AND(A4:B4) | =NOT(E4) | =AND(D4:F4) | =OR(A4:C4) | =XOR(G4:H4) |
| =TRUE | =FALSE| =FALSE | =OR(A5:B5) | =AND(A5:B5) | =NOT(E5) | =AND(D5:F5) | =OR(A5:C5) | =XOR(G5:H5) |
| =FALSE| =TRUE | =TRUE  | =OR(A6:B6) | =AND(A6:B6) | =NOT(E6) | =AND(D6:F6) | =OR(A6:C6) | =XOR(G6:H6) |
| =FALSE| =TRUE | =FALSE | =OR(A7:B7) | =AND(A7:B7) | =NOT(E7) | =AND(D7:F7) | =OR(A7:C7) | =XOR(G7:H7) |
| =FALSE| =FALSE| =TRUE  | =OR(A8:B8) | =AND(A8:B8) | =NOT(E8) | =AND(D8:F8) | =OR(A8:C8) | =XOR(G8:H8) |
| =FALSE| =FALSE| =FALSE | =OR(A9:B9) | =AND(A9:B9) | =NOT(E9) | =AND(D9:F9) | =OR(A9:C9) | =XOR(G9:H9) |

---

## Aufgabe 4: Einführung von Implikation und NICHT (¬(A ∨ B) → (C ∧ ¬(A ∨ B)))

| A   | B   | C   | A ∨ B | ¬(A ∨ B) | C ∧ ¬(A ∨ B) | ¬(A ∨ B) → (C ∧ ¬(A ∨ B)) |
|-----|-----|-----|-------|----------|--------------|----------------------------|
| =TRUE | =TRUE | =TRUE  | =OR(A2:B2) | =NOT(D2) | =AND(C2:E2) | =IF(E2;F2;TRUE) |
| =TRUE | =TRUE | =FALSE | =OR(A3:B3) | =NOT(D3) | =AND(C3:E3) | =IF(E3;F3;TRUE) |
| =TRUE | =FALSE| =TRUE  | =OR(A4:B4) | =NOT(D4) | =AND(C4:E4) | =IF(E4;F4;TRUE) |
| =TRUE | =FALSE| =FALSE | =OR(A5:B5) | =NOT(D5) | =AND(C5:E5) | =IF(E5;F5;TRUE) |
| =FALSE| =TRUE | =TRUE  | =OR(A6:B6) | =NOT(D6) | =AND(C6:E6) | =IF(E6;F6;TRUE) |
| =FALSE| =TRUE | =FALSE | =OR(A7:B7) | =NOT(D7) | =AND(C7:E7) | =IF(E7;F7;TRUE) |
| =FALSE| =FALSE| =TRUE  | =OR(A8:B8) | =NOT(D8) | =AND(C8:E8) | =IF(E8;F8;TRUE) |
| =FALSE| =FALSE| =FALSE | =OR(A9:B9) | =NOT(D9) | =AND(C9:E9) | =IF(E9:F9;TRUE) |

---

## Aufgabe 5: Komplexer Ausdruck mit vier Variablen (¬(A ∨ B) ∧ ((A ∧ C) ↓ ¬(B ∨ D)))

| A   | B   | C   | D   | A ∨ B | ¬(A ∨ B) | A ∧ C | B ∨ D | ¬(B ∨ D) | (A ∧ C) ↓ ¬(B ∨ D) | ¬(A ∨ B) ∧ ((A ∧ C) ↓ ¬(B ∨ D)) |
|-----|-----|-----|-----|-------|----------|-------|-------|----------|--------------------|---------------------------------|
| =TRUE | =TRUE | =TRUE  | =TRUE  | =OR(A2:B2) | =NOT(E2) | =AND(A2:C2) | =OR(B2:D2) | =NOT(G2) | =NOR(F2:H2) | =AND(F2:I2) |
| =TRUE | =TRUE | =TRUE  | =FALSE | =OR(A3:B3) | =NOT(E3) | =AND(A3:C3) | =OR(B3:D3) | =NOT(G3) | =NOR(F3:H3) | =AND(F3:I3) |
| =TRUE | =FALSE| =TRUE  | =TRUE  | =OR(A4:B4) | =NOT(E4) | =AND(A4:C4) | =OR(B4:D4) | =NOT(G4) | =NOR(F4:H4) | =AND(F4:I4) |
| =FALSE| =FALSE| =FALSE | =FALSE | =OR(A5:B5) | =NOT(E5) | =AND(A5:C5) | =OR(B5:D5) | =NOT(G5) | =NOR(F5:H5) | =AND(F5:I5) |

## Achtung: Ich habe die Funktion NOR() bei mir hinzugefügt

```
/**
 * Benutzerdefinierte NOR-Funktion
 * @param {...boolean} values Eingabewerte (können mehrere sein)
 * @return {boolean} Ergebnis der NOR-Operation
 * Nur WAHR, wenn alle Eingaben FALSCH sind.
 */
function NOR(...values) {
  const hasTrue = values.some(value => Boolean(value));
  return !hasTrue;
}
```

**Autor:** Marcel Roger Dorr

## PS.: Hab dass frei schnautze gemacht, Liege stark erkältet im Bett, Sorry dass ich heute nicht so aktiv war. Ich habe das im Sheet gemacht aber konnte das nicht screenshooten da der Browser immer abschmiert, ich warte immer noch auf den laptop den meine Frau demnächst abholen muss.