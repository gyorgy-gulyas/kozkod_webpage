# KözKód Weboldal

A **KözKód** nyilvános bemutatkozó weboldala (`kozkod.hu`). A kezdeményezés célját,
a működését és a csatlakozás módját ismerteti, és átvezet a platformra
(`platform.kozkod.hu`).

## Tartalom

| Oldal | Tartalom |
|---|---|
| `index.html` | Főoldal — a KözKód lényege, hívó üzenetek |
| `koncepcio.html` | Koncepció — a megközelítés és a licenc (EUPL 1.2) magyarázata |
| `hogyan-mukodik.html` | A platform és a folyamatok bemutatása |
| `csatlakozz.html` | Csatlakozás — belépés / regisztráció |
| `kapcsolat.html` | Kapcsolat, elérhetőség (`send.php`) |

A fejléc minden oldalon átvezet a platform publikus vitrinjére (**Közösségek**),
illetve a belépés/regisztráció felé.

## Technológia

Statikus HTML · Tailwind CSS (CDN) · egyszerű PHP kapcsolatűrlap (`send.php`).

## Telepítés

A weboldal **Rackhost** tárhelyen fut, **statikus** HTML-ként, **nincs CI** — a
telepítés kézi: a módosított fájlok feltöltése a tárhelyre (FTP / fájlkezelő).

## Kapcsolódó repók

- **kozkod_platform** — a platform alkalmazása (`platform.kozkod.hu`).
- **kozkod_infra** — szerver-infrastruktúra (Ansible).

## Licenc

EUPL 1.2.
