<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ennek az értéknek hamisnak kell lennie.',
    'This value should be true.' => 'Ennek az értéknek igaznak kell lennie.',
    'This value should be of type {{ type }}.' => 'Ennek az értéknek {{ type }} típusúnak kell lennie.',
    'This value should be blank.' => 'Ennek az értéknek üresnek kell lennie.',
    'The value you selected is not a valid choice.' => 'A választott érték érvénytelen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Legalább {{ limit }} értéket kell kiválasztani.|Legalább {{ limit }} értéket kell kiválasztani.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Legfeljebb {{ limit }} értéket lehet kiválasztani.|Legfeljebb {{ limit }} értéket lehet kiválasztani.',
    'One or more of the given values is invalid.' => 'A megadott értékek közül legalább egy érvénytelen.',
    'This field was not expected.' => 'Nem várt mező.',
    'This field is missing.' => 'Ez a mező hiányzik.',
    'This value is not a valid date.' => 'Ez az érték nem egy érvényes dátum.',
    'This value is not a valid datetime.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid email address.' => 'Ez az érték nem egy érvényes e-mail cím.',
    'The file could not be found.' => 'A fájl nem található.',
    'The file is not readable.' => 'A fájl nem olvasható.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy ({{ size }} {{ suffix }}). A legnagyobb megengedett méret {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'A fájl MIME típusa érvénytelen ({{ type }}). Az engedélyezett MIME típusok: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ez az érték legfeljebb {{ limit }} lehet.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.|Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.',
    'This value should be {{ limit }} or more.' => 'Ez az érték legalább {{ limit }} kell, hogy legyen.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.|Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.',
    'This value should not be blank.' => 'Ez az érték nem lehet üres.',
    'This value should not be null.' => 'Ez az érték nem lehet null.',
    'This value should be null.' => 'Ennek az értéknek nullnak kell lennie.',
    'This value is not valid.' => 'Ez az érték nem érvényes.',
    'This value is not a valid time.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid URL.' => 'Ez az érték nem egy érvényes URL.',
    'The two values should be equal.' => 'A két értéknek azonosnak kell lennie.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy. A megengedett maximális méret: {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'A fájl túl nagy.',
    'The file could not be uploaded.' => 'A fájl nem tölthető fel.',
    'This value should be a valid number.' => 'Ennek az értéknek érvényes számnak kell lennie.',
    'This file is not a valid image.' => 'Ez a fájl nem egy érvényes kép.',
    'This is not a valid IP address.' => 'Ez az érték nem egy érvényes IP cím.',
    'This value is not a valid language.' => 'Ez az érték nem egy érvényes nyelv.',
    'This value is not a valid locale.' => 'Ez az érték nem egy érvényes területi beállítás.',
    'This value is not a valid country.' => 'Ez az érték nem egy érvényes ország.',
    'This value is already used.' => 'Ez az érték már használatban van.',
    'The size of the image could not be detected.' => 'A kép méretét nem lehet megállapítani.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A kép szélessége túl nagy ({{ width }}px). A megengedett legnagyobb szélesség {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A kép szélessége túl kicsi ({{ width }}px). Az elvárt legkisebb szélesség {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A kép magassága túl nagy ({{ height }}px). A megengedett legnagyobb magasság {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A kép magassága túl kicsi ({{ height }}px). Az elvárt legkisebb magasság {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ez az érték a felhasználó jelenlegi jelszavával kell megegyezzen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.|Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.',
    'The file was only partially uploaded.' => 'A fájl csak részben lett feltöltve.',
    'No file was uploaded.' => 'Nem lett fájl feltöltve.',
    'No temporary folder was configured in php.ini.' => 'Nincs ideiglenes könyvtár beállítva a php.ini-ben.',
    'Cannot write temporary file to disk.' => 'Az ideiglenes fájl nem írható a lemezre.',
    'A PHP extension caused the upload to fail.' => 'Egy PHP bővítmény miatt a feltöltés nem sikerült.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.|Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.',
    'Invalid card number.' => 'Érvénytelen kártyaszám.',
    'Unsupported card type or invalid card number.' => 'Nem támogatott kártyatípus vagy érvénytelen kártyaszám.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Érvénytelen nemzetközi bankszámlaszám (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ez az érték nem egy érvényes ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-10 vagy ISBN-13.',
    'This value is not a valid ISSN.' => 'Ez az érték nem egy érvényes ISSN.',
    'This value is not a valid currency.' => 'Ez az érték nem egy érvényes pénznem.',
    'This value should be equal to {{ compared_value }}.' => 'Ez az érték legyen {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ez az érték nagyobb legyen, mint {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ez az érték nagyobb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ugyanolyan legyen, mint {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ez az érték kisebb legyen, mint {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ez az érték kisebb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ez az érték ne legyen {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ne legyen ugyanolyan, mint {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A képarány túl nagy ({{ ratio }}). A megengedett legnagyobb képarány {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A képarány túl kicsi ({{ ratio }}). A megengedett legkisebb képarány {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A kép négyzet alakú ({{ width }}x{{ height }}px). A négyzet alakú képek nem engedélyezettek.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A kép fekvő tájolású ({{ width }}x{{ height }}px). A fekvő tájolású képek nem engedélyezettek.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A kép álló tájolású ({{ width }}x{{ height }}px). Az álló tájolású képek nem engedélyezettek.',
    'An empty file is not allowed.' => 'Üres fájl nem megengedett.',
    'The host could not be resolved.' => 'Az állomásnevet nem lehet feloldani.',
    'This value does not match the expected {{ charset }} charset.' => 'Ez az érték nem az elvárt {{ charset }} karakterkódolást használja.',
    'This is not a valid Business Identifier Code (BIC).' => 'Érvénytelen nemzetközi bankazonosító kód (BIC/SWIFT).',
    'Error' => 'Hiba',
    'This is not a valid UUID.' => 'Érvénytelen egyedi azonosító (UUID).',
    'This value should be a multiple of {{ compared_value }}.' => 'Ennek az értéknek oszthatónak kell lennie a következővel: {{ compared_value }}',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ez a Bankazonosító kód (BIC) nem kapcsolódik az IBAN kódhoz ({{ iban }}).',
    'This value should be valid JSON.' => 'Ez az érték érvényes JSON kell, hogy legyen.',
    'This value should be positive.' => 'Ennek az értéknek pozitívnak kell lennie.',
    'This value should be either positive or zero.' => 'Ennek az értéknek pozitívnak vagy nullának kell lennie.',
    'This value should be negative.' => 'Ennek az értéknek negatívnak kell lennie.',
    'This value should be either negative or zero.' => 'Ennek az értéknek negatívnak vagy nullának kell lennie.',
    'This collection should contain only unique elements.' => 'Ez a gyűjtemény csak egyedi elemeket tartalmazhat.',
    'This value is not a valid timezone.' => 'Ez az érték nem egy érvényes időzóna.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ez a jelszó korábban egy adatvédelmi incidens során illetéktelenek kezébe került, így nem használható. Kérjük, használjon másik jelszót.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ennek az értéknek {{ min }} és {{ max }} között kell lennie.',
    'This value is not a valid hostname.' => 'Ez az érték nem egy érvényes állomásnév (hosztnév).',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'A gyűjteményben lévő elemek számának oszthatónak kell lennie a következővel: {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Ennek az értéknek meg kell felelni legalább egynek a következő feltételek közül:',
    'Each element of this collection should satisfy its own set of constraints.' => 'A gyűjtemény minden elemének meg kell felelni a saját feltételeinek.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Ez az érték nem egy érvényes nemzetközi értékpapír-azonosító szám (ISIN).',
    'This value should be a valid expression.' => 'Ennek az értéknek érvényes kifejezésnek kell lennie.',
    'This value is not a valid CSS color.' => 'Ez az érték nem egy érvényes CSS szín.',
    'This value is not a valid CIDR notation.' => 'Ez az érték nem egy érvényes CIDR jelölés.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Ennek a netmask értéknek {{ min }} és {{ max }} között kell lennie.',
    'This form should not contain extra fields.' => 'Ez a mezőcsoport nem tartalmazhat extra mezőket.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'A feltöltött fájl túl nagy. Kérem, próbáljon egy kisebb fájlt feltölteni.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Érvénytelen CSRF token. Kérem, próbálja újra elküldeni az űrlapot.',
    'This value is not a valid HTML5 color.' => 'Ez az érték nem egy érvényes HTML5 szín.',
    'Please enter a valid birthdate.' => 'Kérjük, adjon meg egy valós születési dátumot.',
    'The selected choice is invalid.' => 'A kiválasztott opció érvénytelen.',
    'The collection is invalid.' => 'A gyűjtemény érvénytelen.',
    'Please select a valid color.' => 'Kérjük, válasszon egy érvényes színt.',
    'Please select a valid country.' => 'Kérjük, válasszon egy érvényes országot.',
    'Please select a valid currency.' => 'Kérjük, válasszon egy érvényes pénznemet.',
    'Please choose a valid date interval.' => 'Kérjük, válasszon egy érvényes dátumintervallumot.',
    'Please enter a valid date and time.' => 'Kérjük, adjon meg egy érvényes dátumot és időpontot.',
    'Please enter a valid date.' => 'Kérjük, adjon meg egy érvényes dátumot.',
    'Please select a valid file.' => 'Kérjük, válasszon egy érvényes fájlt.',
    'The hidden field is invalid.' => 'A rejtett mező érvénytelen.',
    'Please enter an integer.' => 'Kérjük, adjon meg egy egész számot.',
    'Please select a valid language.' => 'Kérjük, válasszon egy érvényes nyelvet.',
    'Please select a valid locale.' => 'Kérjük, válasszon egy érvényes területi beállítást.',
    'Please enter a valid money amount.' => 'Kérjük, adjon meg egy érvényes pénzösszeget.',
    'Please enter a number.' => 'Kérjük, adjon meg egy számot.',
    'The password is invalid.' => 'A jelszó érvénytelen.',
    'Please enter a percentage value.' => 'Kérjük, adjon meg egy százalékos értéket.',
    'The values do not match.' => 'Az értékek nem egyeznek.',
    'Please enter a valid time.' => 'Kérjük, adjon meg egy érvényes időpontot.',
    'Please select a valid timezone.' => 'Kérjük, válasszon érvényes időzónát.',
    'Please enter a valid URL.' => 'Kérjük, adjon meg egy érvényes URL-t.',
    'Please enter a valid search term.' => 'Kérjük, adjon meg egy érvényes keresési kifejezést.',
    'Please provide a valid phone number.' => 'Kérjük, adjon egy érvényes telefonszámot',
    'The checkbox has an invalid value.' => 'A jelölőnégyzet értéke érvénytelen.',
    'Please enter a valid email address.' => 'Kérjük valós e-mail címet adjon meg.',
    'Please select a valid option.' => 'Kérjük, válasszon egy érvényes beállítást.',
    'Please select a valid range.' => 'Kérjük, válasszon egy érvényes tartományt.',
    'Please enter a valid week.' => 'Kérjük, adjon meg egy érvényes hetet.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Hitelesítési hiba lépett fel.',
    'Authentication credentials could not be found.' => 'Nem találhatók hitelesítési információk.',
    'Authentication request could not be processed due to a system problem.' => 'A hitelesítési kérést rendszerhiba miatt nem lehet feldolgozni.',
    'Invalid credentials.' => 'Érvénytelen hitelesítési információk.',
    'Cookie has already been used by someone else.' => 'Ezt a sütit valaki más már felhasználta.',
    'Not privileged to request the resource.' => 'Nem rendelkezik az erőforrás eléréséhez szükséges jogosultsággal.',
    'Invalid CSRF token.' => 'Érvénytelen CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Nem található a hitelesítési tokent támogató hitelesítési szolgáltatás.',
    'No session available, it either timed out or cookies are not enabled.' => 'Munkamenet nem áll rendelkezésre, túllépte az időkeretet vagy a sütik le vannak tiltva.',
    'No token could be found.' => 'Nem található token.',
    'Username could not be found.' => 'A felhasználónév nem található.',
    'Account has expired.' => 'A fiók lejárt.',
    'Credentials have expired.' => 'A hitelesítési információk lejártak.',
    'Account is disabled.' => 'Felfüggesztett fiók.',
    'Account is locked.' => 'Zárolt fiók.',
    'Too many failed login attempts, please try again later.' => 'Túl sok sikertelen bejelentkezési kísérlet, kérjük próbálja újra később.',
    'Invalid or expired login link.' => 'Érvénytelen vagy lejárt bejelentkezési link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Túl sok sikertelen bejelentkezési kísérlet, kérjük próbálja újra %minutes% perc múlva.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Túl sok sikertelen bejelentkezési kísérlet, kérjük próbálja újra %minutes% perc múlva.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Korábban feltöltött fájl törlése?',
    'vich_uploader.link.download' => 'Jelenlegi fájl letöltése',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Előző',
    'label_next' => 'Következő',
    'filter_searchword' => 'Keresés...',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% év',
    '%count% month|%count% months' => '%count% hónap',
    '%count% day|%count% days' => '%count% nap',
    '%count% hour|%count% hours' => '%count% óra',
    '%count% minute|%count% minutes' => '%count% perc',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini, ou le répertoire configuré n\'existe pas.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This value is not a valid CSS color.' => 'Cette valeur n\'est pas une couleur CSS valide.',
    'This value is not a valid CIDR notation.' => 'Cette valeur n\'est pas une notation CIDR valide.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'La valeur du masque de réseau doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minutes.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Supprimer?',
    'vich_uploader.link.download' => 'Télécharger',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédente',
    'label_next' => 'Suivante',
    'filter_searchword' => 'Recherche...',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% an|%count% ans',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'There was a problem validating your password reset request' => 'Un problème est survenu lors de la validation de votre demande de réinitialisation de mot de passe',
    'There was a problem handling your password reset request' => 'Un problème est survenu lors du traitement de votre demande de réinitialisation de mot de passe',
    'The link in your email is expired. Please try to reset your password again.' => 'Le lien dans votre e-mail est expiré. Veuillez réessayer de réinitialiser votre mot de passe.',
    'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.' => 'Veuillez mettre à jour la configuration de request_password_repository dans config/packages/reset_password.yaml pour pointer vers votre service "request password repository"',
    'The reset password link is invalid. Please try to reset your password again.' => 'Le lien de réinitialisation du mot de passe n\'est pas valide. Veuillez réessayer de réinitialiser votre mot de passe',
    'You have already requested a reset password email. Please check your email or try again soon.' => 'Vous avez déjà demandé un e-mail de réinitialisation du mot de passe. Veuillez vérifier votre e-mail ou réessayer bientôt.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
