# Úkoly pro nového vývojáře

* úkoly jsou připravené v branchích `task-1` až `task-n`
* k provozu by mělo stačit mít
    * integrovaný server v PHP
        * pokud máš staré php, stahni si nové aspoň 7.4
        * spustíš ho ve složce `src/` pomocí `php -S localhost:8080` a pak si otevřeš `http://localhost:8080` v prohlížeči
    * nainstalovaný composer
        * https://getcomposer.org/doc/00-intro.md#using-the-installer
    * phpunit
        * testy (pokud v příkladu jsou) spustíš z konzole z adresáře projektu vendor\bin\phpunit tests/
        * o instalaci phpunitu se stará composer
* v každém kroku si nejprve zavolej `composer install`, aby se ti nainstalovaly závislosti
* checkoutni si branch a normálně do ní přidávej commity, ať nepřijdeš o rozdělanou práci
* pokud si myslíš, že je v připraveném kódu chyba, tak nám dej vědět, je to určitě možné
* není to závod na čas, budeme radši, když to bude fungovat, než když to bude rychle
* ber to jako normální zadání práce (tedy něco co u nás budeš za čas dělat)
    * je důležité, aby to splnilo zadání
    * není nutné, abys napsal 1000 řádků kódu - klidně použij něco hotového
    * je důležité, aby byly pokryté základní reálné scénáře, které mohou nastat
    * není nutné, aby byly pokryté všechny možné scénáře, ale pokud uznáš za vhodné, tak nás na možné nedostatky upozorni
    * chceme vědět i jak si zvládáš hledat informace, když něco nevíš - nevíš? podívej se do dokumentace nebo na internet 
    * na druhou stranu, když narazíš na něco na co nemůžeš přijít, tak se zeptej - jako to budeš dělat běžně v práci
* můžeš používat cokoli uznáš za vhodné
    * internet
    * manuály
    * předchozí projekty
    * knížky
* tohle není písemka ve škole (tj. klidně opisuj, máš-li z čeho)
* až budeš hotový, pošli nám svou práci formou git patch nebo nám zabal celou svou složku (včetně .git adresáře) do ZIP archivu a pošli ji na e-mail
