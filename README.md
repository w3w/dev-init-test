Zadání
======

* na URL adrese `https://demo.shopio.cz/export/zbozi-heureka/` je XML, ve kterém jsou informace o produktech v obchodu
v heureka formátu. Viz https://sluzby.heureka.cz/napoveda/xml-feed/

* (Volitelně) ukládej data do databáze (např. sqlite nebo jiná podle toho na co jsi zvyklý)
* tvým úkolem je tato data následně vypsat na stránku ve stylu katalogu
* katalog by měl zobrazovat:
    * název
    * popis
    * kategorii
    * cenu
    * výrobce
    * seznam parametrů s hodnotami
* počítej, že feed může být i větší (např. > 50 MB) a že paměť na serveru je omezená 
* Bonus - zkus upravit svůj skript s ohledem na nízkou spotřebu paměti, např. 16 MB by mělo bohatě stačit - výpis na stránce můžeš omezit na určitý počet nebo rozsah - fungování můžeš vyzkoušet např. `https://www.lyzelyze.cz/export/zbozi-heureka/`
* kdybys měl problém, hned se ptej
