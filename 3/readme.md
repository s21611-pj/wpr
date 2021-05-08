ZADANIA ZJAZD 2

1. Prosty kalkulator:
   a. stwórz formularz z miejscem na wpisanie 2 liczb oraz wyborem działania (dodawanie, odejmowanie, mnożenie, dzielenie)
   b. stwórz skrypt PHP, który obsłuży dane z formularza (na podstawie wybranego działania policzy i wyświetli wynik w przeglądarce)
2. Formularz rezerwacji hotelu:
   a. stwórz formularz, który będzie pozwalał: podać z listy rozwijanej ilość osób (1-4), których dotyczy rezerwacja, wpisać dane osoby rezerwującej pobyt np. imię, nazwisko, adres, dane karty kredytowej, e-mail, podać datę pobytu, czy godzinę przyjazdu itd. (pamiętając o odpowiedniej walidacji pól - typach), zaznaczyć czy jest potrzeba dostawienia łóżka dla dziecka, z listy wybrać odpowiednie udogodnienia np. klimatyzacja i popielniczka dla palacza (pamiętaj określić które pola są wymagane)
   b. stwórz skrypt PHP, który odbierze powyższe dane i w ładny i przejrzysty sposób wyświetli podsumowanie rezerwacji (użyć do wyświetlenia szablonu HTML
3. Dla zadania nr 2 dodaj krok, w którym w zależności od liczby osób wyświetli się formularz, który pozwoli uzupełnić podstawowe dane tych osób w zgrupowanych formularzach i doda tę informację do podsumowania rezerwacji.
4. Czy dana liczba jest liczbą pierwszą?
   a. stwórz formularz z miejscem na wpisanie liczby
   b. stwórz skrypt PHP, który przyjmie liczbę z formularza (sprawdzi czy to na pewno liczba całkowita dodatnia), a następnie wywoła funkcję, sprawdzającą czy liczba jest liczbą pierwszą
   c. w swoim programie umieść zmienną, która policzy wszystkie iteracje pętli, potrzebne do wykonania obliczeń. Spróbuj tak zmodyfikować program, by było potrzeba jak najmniej iteracji (przy zachowaniu prawidłowego działania).

ZADANIA ZJAZD 3

1. Przerób zadanie z poprzednich zajęć, kalkulator, tak aby:
   a. każde działanie (dodawanie, odejmowanie itp) było umieszczone w oddzielnej
   funkcji
   b. wszystkie funkcje były umieszczone w innym pliku niż główny skrypt
   c. główny skrypt zawierał tylko switcha, a w nim wywołanie odpowiedniej funkcji
   d. (trzeba użyć include()/require() by korzystać z funkcji z innego pliku)
2. Formularz zapisujący dane do pliku:
   a. ma posiadać pola tekstowe i przycisk zapisu
   b. stwórz plik tekstowy, do którego będą zapisywane dane (przez skrypt)
   c. skrypt, przyjmujący dane z formularza, ma zapisać tekst do pliku, dopisując go na
   końcu ( jako nowa linia)
3. Pierwszy CMS:
   a. Przerób zadanie z poprzednich zajęć - formularz rezerwacji, aby dane były wpisywane do pliku csv.
   b. pierwsza kolumna - nazwy pól oddzielone separatorem np. ";" (nazwa1;nazwa2;nazwa3...)
   c. kazdorazowe wysłanie formularza wysyła nowe dane do pliku jako nowy rekord (wartosc1;wartosc2;wartosc3...)
   d. przycisk "wczytaj" pozwoli wczytać i wyswietlic dane w przeglądarce
