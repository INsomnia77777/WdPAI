# BladeCrew🛼

Platforma dedykowana społeczności rolkowej (slalom, freeride, aggressive), integrująca zaawansowany słownik trików, mapę miejscówek (SpotFinder) 
oraz narzędzia dla instruktorów do zarządzania grupami i postępami swoich uczniów.

## 1. Funkcje
Aplikacja rozwiązuje problem braku jednego, spójnego ekosystemu dla rolkarzy. Zamiast korzystać z wielu rozproszonych narzędzi, RollerDex oferuje:

- Spis trików z systemem postępów: Użytkownicy mogą oznaczać poziom opanowania poszczególnych manewrów (Unlearned, Learning, Mastered).

- SpotFinder: Interaktywna mapa pozwalająca dodawać, oceniać i filtrować miejscówki dedykowane konkretnym dyscyplinom.

- Tryb Instruktora (Chaty i Grupy): Instruktorzy mogą tworzyć zamknięte grupy, planować zajęcia, komunikować się z uczniami przez wbudowany czat oraz weryfikować i zatwierdzać postępy podopiecznych.

---

## 2. Zrzuty głównych ekranów

1. **Dashboard główny (Spis trików i mapa)**

2. **Panel Instruktora i Chat Grupowy**

3. **Widok Mobilny (Responsywność)**

---

## 3. Tech stack

| Warstwa | Technologie |
| --- | --- |
| Backend | PHP 8.3 |
| Baza danych | PostgreSQL 16 |
| Serwer HTTP | Nginx |
| Frontend | HTML5, CSS3 / Tailwind CSS, JavaScript (Vanilla JS / Fetch API) |
| Konteneryzacja | Docker Compose |
| Testy | PHPUnit |
| Obsługa e-mail | PHPMailer, Mailpit |

---

## 4. Szybki start

```bash
git clone https://github.com/LOGIN/REPOZYTORIUM.git
cd REPOZYTORIUM
docker compose up --build -d
```

Aplikacja: http://localhost:8080


---
# Wymagania projektu

| Nr | Kryterium | Warunek uzyskania 1 punktu | Status | Komentarze / Uwagi |
| --- | --- | --- | --- | --- |
| **1** | **Dokumentacja w README.md** | README zawiera opis problemu i funkcji aplikacji, instrukcję uruchomienia, wymagania, dane demonstracyjne, zrzuty najważniejszych ekranów, opis przepływu aplikacji, architekturę, ERD, sposób uruchomienia testów oraz link do wdrożenia. Zrzuty pokazują realny projekt, a nie sam prototyp. | [ ] | *Szablon README jest gotowy – wystarczy podmienić zrzuty screenów z działającej aplikacji oraz wkleić realny link do wdrożenia.* |
| **2** | **Docker** | Projekt uruchamia się powtarzalnie przez `docker compose up --build`. Kontenery aplikacji i PostgreSQL komunikują się po nazwach usług, dane bazy są utrwalone w wolumenie, a porty i zmienne są opisane. Pełny punkt wymaga uruchomienia projektu na czystym środowisku. | [ ] | *Sprawdzić uruchomienie na świeżo sklonowanym repozytorium.* |
| **3** | **Architektura aplikacji** | Aplikacja ma czytelny podział odpowiedzialności (MVC). W README znajduje się diagram lub opis warstw i kierunku zależności. Kontroler nie zawiera całego SQL, HTML i logiki biznesowej. | [ ] | *Podział: Controllers, Models, Views, Services/Validators.* |
| **4** | **Routing** | Router rozpoznaje metody HTTP i wzorce adresów. Projekt zawiera trasę statyczną, regex pattern, path parameter z przekazaniem i walidacją ID oraz query parameter. Błędne/nieistniejące ID kończą się kodem 400 lub 404. | [ ] | *Przykłady tras: `/spots` (statyczna), `/tricks/{id}` (path param z walidacją `int`), `/tricks?discipline=slalom` (query param).* |
| **5** | **Obiektowy backend** | Backend wykorzystuje klasy, obiekty, enkapsulację, typy i podział odpowiedzialności. Kontrolery, repozytoria lub serwisy współpracują przez określone interfejsy. Kod proceduralny ograniczony do punktu wejścia (`index.php`) i konfiguracji. | [ ] | *Używać deklaracji typów w PHP 8.3 (`string`, `int`, `readonly`, `enum`).* |
| **6** | **Diagram ERD w Mermaid** | Aktualny diagram ERD jest umieszczony bezpośrednio w `README.md` jako blok Mermaid `erDiagram`. Pokazuje tabele, klucze główne/obce, atrybuty i krotności relacji oraz jest zgodny ze schematem bazy. | [ ] | *Gotowy diagram wygenerowany w sekcji 7 dokumentacji.* |
| **7** | **Git** | Historia pokazuje systematyczną pracę: małe logiczne commity, czytelne komunikaty i brak jednego zbiorczego commita z całym projektem. Wersja zmergowana do `main`. | [ ] | *Commitować stopniowo funkcjonalność po funkcjonalności.* |
| **8** | **Realizacja tematu** | Projekt jest zgodny ze zgłoszonym tematem, realizuje jego najważniejszy proces od początku do końca i pozwala przeprowadzić spójne demo (nie mogą być to wyłącznie statyczne makiety). | [ ] | *Scenariusz demo: rejestracja/logowanie $\rightarrow$ dodanie spotu $\rightarrow$ oznaczenie triku $\rightarrow$ akceptacja w grupie przez instruktora.* |
| **9** | **HTML** | Widoki wykorzystują semantyczny i poprawny HTML (`<main>`, `<section>`, `<nav>`). Powtarzające się elementy (header, footer) są wydzielone do szablonów. Formularze mają etykiety `<label>`, typy pól i komunikaty błędów. | [ ] | *Użyć współdzielonego szablonu `views/layout/header.php` i `footer.php`.* |
| **10** | **PostgreSQL** | Aplikacja korzysta z PostgreSQL. Połączenie konfigurowane poza kodem (`.env`), zapytania parametryzowane (PDO), dane mapowane w kontrolowany sposób. Student potrafi wskazać zapytanie wykonywane podczas demo. | [ ] | *Przygotować konkretne zapytanie SQL (np. złączenie `JOIN` trików użytkownika) do zaprezentowania na obronie.* |
| **11** | **Złożoność bazy danych** | Schemat zawiera kilka powiązanych encji, poprawne klucze, ograniczenia i uzasadnione relacje. Dane są znormalizowane. Typy kolumn odpowiadają przechowywanym wartościom. | [ ] | *Encje: `users`, `tricks`, `spots`, `user_tricks`, `groups`, `group_members`, `messages`.* |
| **12** | **Eksport bazy do pliku .sql** | Repozytorium zawiera aktualny plik `.sql` pozwalający odtworzyć schemat i bezpieczne dane demonstracyjne na pustej bazie. Brak produkcyjnych danych osobowych i sekretów. | [ ] | *Plik `dump.sql` lub `init.sql` w katalogu Docker.* |
| **13** | **PHP** | Kod korzysta ze współczesnej wersji PHP 8.3, deklaracji typów, poprawnej obsługi błędów i funkcji standardowych. Brak ostrzeżeń/błędów podczas używania. | [ ] | *Włączyć `error_reporting(E_ALL)` w trybie dev, aby wyłapać ewentualne warningi.* |
| **14** | **JavaScript** | JS realizuje realne zachowanie interfejsu: walidację klient-side, obsługę zdarzeń i manipulację DOM. Kod podzielony na funkcje/moduły. | [ ] | *Obsługa kliknięć, przełączanie motywu, walidacja formularza przed wysłaniem.* |
| **15** | **Fetch API (AJAX)** | Aplikacja wykonuje co najmniej jedno uzasadnione żądanie GET i POST przez Fetch API bez przeładowania strony (JSON, statusy HTTP, stan ładowania, sukces/błąd). | [ ] | *POST: zmiana stanu triku (*Unlearned* $\rightarrow$ *Mastered*). GET: pobieranie wiadomości chatu grupowego.* |
| **16** | **Design** | Interfejs jest spójny, czytelny i zgodny z tematyką (np. motyw dark z akcentami ulicznymi). Style w arkuszach CSS (brak inline CSS). | [ ] | *Zrealizowane w oparciu o czysty CSS lub Tailwind CSS.* |
| **17** | **Responsywność** | Co najmniej 5 istotnych widoków działa poprawnie na telefonie, tablecie i komputerze. Brak poziomego scrolla i nachodzenia elementów. Flexbox/Grid + Media Queries. | [ ] | *Widoki: Dashboard, Spis Triki, SpotFinder/Mapa, Panel Instruktora, Profil.* |
| **18** | **Tryb dark/light mode** | Ustawiany atrybutem `data-theme` na `<html>`, zapis w `localStorage`, uwzględnienie `prefers-color-scheme`. Krótki skrypt w `<head>` zapobiega efektowi FOUC. | [ ] | *Zapobiega mignięciu białym tłem przy ładowaniu strony.* |
| **19** | **Zgodność z WCAG** | Dostępność klawiatury, widoczny fokus, obrazy z atrybutem `alt`, formularze z labelami, wystarczający kontrast. W README raport z Lighthouse/WAVE z opisem poprawek. | [ ] | *Opis badań w sekcji 9 README.* |
| **20** | **Logowanie** | Logowanie danymi z bazy. Hasło weryfikowane przez `password_verify()`, bezpieczny komunikat przy błędzie, przekierowanie i odtworzenie tożsamości po zalogowaniu. | [ ] | *Błędny login/hasło zwraca ogólne "Niepoprawny login lub hasło".* |
| **21** | **Sesja użytkownika** | Stan utrzymywany między podstronami. `session_regenerate_id()` po zalogowaniu, właściwe ustawienia cookie (`httponly`, `samesite`), brak ulania uprawnień na klienta. | [ ] | *Włączone flagi bezpiecznych ciasteczek w `session_start()`.* |
| **22** | **Uprawnienia użytkowników** | Serwerowe sprawdzanie uprawnień przed każdą chronioną operacją (middleware). Próba ręcznego wywołania niedozwolonej trasy zwraca 401 lub 403. | [ ] | *Tylko `INSTRUCTOR` może akceptować triki i dodawać notatki do grupy.* |
| **23** | **Role użytkowników** | Co najmniej dwie role (`USER` / uczeń i `INSTRUCTOR` / admin). Role mają odmienne możliwości i są zaprezentowane na oddzielnych kontach demo. | [ ] | *Konta w bazie: `instruktor@rollerdex.com` oraz `uczen1@rollerdex.com`.* |
| **24** | **Wylogowywanie** | Unieważnienie sesji i usunięcie/wygaśnięcie cookie. Przycisk "Wstecz" ani ponowienie żądania nie przywraca dostępu do chronionej trasy. | [ ] | *`session_destroy()` + przeterminowanie ciasteczka sesyjnego.* |
| **25** | **Widoki, wyzwalacze, funkcje lub transakcje** | Zastosowanie w PostgreSQL co najmniej jednego mechanizmu: widok, wyzwalacz, funkcja lub transakcja. Musi wynikać z realnego scenariusza demo. | [ ] | *Transakcja przy zatwierdzaniu triku ucznia przez instruktora / Widok `user_progress_stats`.* |
| **26** | **Akcje na referencjach** | Zapytania łączące tabele przez `JOIN`. Klucze obce z zachowaniem `ON DELETE CASCADE` (np. usuwanie wiadomości grupy przy usunięciu grupy) lub `RESTRICT`. | [ ] | *Przygotować uzasadnienie wyboru akcji na kluczach obcych na obronę.* |
| **27** | **Bezpieczeństwo — Security Bingo** | Zrealizowane i udokumentowane Security Bingo. Tabela w README z dowodem dla każdego z 6 pól (hashowanie, PDO, walidacja, XSS, upload, 401/403). | [ ] | *Tabela w sekcji 8 w README.* |
| **28** | **Brak replikacji kodu** | Powtarzająca się logika wydzielona do klas/metod/szablonów. Brak duplikacji zapytań SQL, walidacji czy bloków HTML (DRY). | [ ] | *Jeden centralny mechanizm bazy danych PDO i uniwersalny plik Layout.* |
| **29** | **Czystość i przejrzystość kodu** | Nazwy opisują odpowiedzialność, metody są krótkie, formatowanie spójne (PSR-12), brak martwego kodu i debugowania (`var_dump`). Komentarze objaśniają decyzje. | [ ] | *Usunąć wszystkie `console.log` i `var_dump` przed oddaniem.* |
| **30** | **Tłumaczenia** | Interfejs obsługuje co najmniej język polski (PL) i angielski (EN). Teksty pobierane z plików tłumaczeń (katalog `/lang`). Obejmuje też komunikaty błędów. | [ ] | *Mechanizm `__('key')` pobierający tekst z tablicy `$lang['pl']` / `$lang['en']`.* |
| **31** | **Testy jednostkowe** | Uruchamialne testy PHPUnit dla logiki backendu (przadek poprawny i błędny). Testy izolowane, kończą się sukcesem. Opis komendy w README. | [ ] | *Uruchamiane przez `docker compose exec app vendor/bin/phpunit`.* |
| **32** | **CRON** | Zadanie cykliczne z uzasadnionym celem (np. wysyłka przypomnień e-mail o treningu). Harmonogram, polecenie i sposób testowania opisane w README. | [ ] | *Skrypt PHP uruchamiany przez harmonogram Crona w kontenerze.* |
| **33** | **PHP Mailer** | Wysyłka użytecznych e-maili przez PHPMailer / SMTP (zaproszenie do grupy, przypomnienie). Dane z `.env`, wsparcie dla przechwytywania wiadomości przez Mailpit. | [ ] | *Konfiguracja SMTP wskazująca na kontener `mailpit:1025`.* |
| **34** | **Upload zdjęcia** | Backend sprawdza rozmiar, typ MIME i rozszerzenie, nadaje unikalną nazwę (`uniqid()`) i zapisuje w katalogu uploadów. W bazie przechowywana jest wyłącznie ścieżka. | [ ] | *Wgrywanie zdjęć spotów w SpotFinderze.* |
| **35** | **Zmienne w .env lub Key Vault** | Hasła, tokeny i konfiguracja środowiskowa nie są wpisane w kod. Repozytorium zawiera `.env.example`. Produkcja korzysta ze zmiennych środowiskowych. | [ ] | *Brak zahardkodowanych haseł do bazy danych w plikach `.php`.* |
| **36** | **Deploy** | Aplikacja dostępna pod publicznym adresem i działa poza komputerem autora. Wersja odpowiada gałęzi `main`, ma działającą bazę, uploady i zmienne. Link w README. | [ ] | *Wdrożenie na platformie typu Render, Fly.io lub własnym VPS.* |

---

### Dodatkowe funkcje planowane na daleką przyszłość
- grywalizacja np tryb game of skate
- crew finder

## Autor

Martyna Tuszewska
