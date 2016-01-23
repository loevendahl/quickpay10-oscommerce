<?php
/*
  $Id: english.php,v 1.114 2003/07/09 18:13:39 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'da_DK.ISO_8859-1');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'DKK');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="LTR" lang="en"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Opret konto');
define('HEADER_TITLE_MY_ACCOUNT', 'Min Konto');
define('HEADER_TITLE_CART_CONTENTS', 'Indkøbskurv');
define('HEADER_TITLE_CHECKOUT', 'Til Kassen');
define('HEADER_TITLE_TOP', 'Forside');
define('HEADER_TITLE_CATALOG', 'Butik');
define('HEADER_TITLE_LOGOFF', 'Log af');
define('HEADER_TITLE_LOGIN', 'Log på');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'hits siden');

// text for gender
define('MALE', 'Mand');
define('FEMALE', 'Kvinde');
define('MALE_ADDRESS', 'Hr.');
define('FEMALE_ADDRESS', 'Fru.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Varegrupper');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Producenter');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Nyheder');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Hurtig Søg');
define('BOX_SEARCH_TEXT', 'Indtast stikord her - eller gå til:');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Avanceret Søg');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', 'Tilbud');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Anmeldelser');
define('BOX_REVIEWS_WRITE_REVIEW', 'Anmeld denne vare!');
define('BOX_REVIEWS_NO_REVIEWS', 'Der er i øjeblikket ingen anmeldelser!');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s af 5 Stjerner!');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Indkøbskurv');
define('BOX_SHOPPING_CART_EMPTY', '..er tom!');

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Tidligere ordrer');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Top sælgere');
define('BOX_HEADING_BESTSELLERS_IN', 'Topsælgere i<br>  ');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Advisering');
define('BOX_NOTIFICATIONS_NOTIFY', 'Advisér mig om opdateringer på <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Ingen advisering for <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Producent Info');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s\'s hjemmeside');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Andre produkter');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Sprog');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Valuta');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', 'Information');
define('BOX_INFORMATION_PRIVACY', 'Fortrolighed');
define('BOX_INFORMATION_CONDITIONS', 'Anvendelse');
define('BOX_INFORMATION_SHIPPING', 'Forsendelse & Retur');
define('BOX_INFORMATION_CONTACT', 'Kontakt os');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', 'Anbefal til en ven');
define('BOX_TELL_A_FRIEND_TEXT', 'Fortæl en ven om denne vare.');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Forsendelses info');
define('CHECKOUT_BAR_PAYMENT', 'Betalings info');
define('CHECKOUT_BAR_CONFIRMATION', 'Bekræft');
define('CHECKOUT_BAR_FINISHED', 'Færdig!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Vælg');
define('TYPE_BELOW', 'Indtast nedenfor');

// javascript messages
define('JS_ERROR', 'Der er opstået en fejl under behandlingen af din formular!\nRet venligst følgende:\n\n');

define('JS_REVIEW_TEXT', '*  \'Anmeldelsen\' skal mindst havet ' . REVIEW_TEXT_MIN_LENGTH . ' tegn.\n');
define('JS_REVIEW_RATING', '* Du skal give din anmeldelse en karakter.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Vælg venligst en betalings-metode for din ordre.\n');

define('JS_ERROR_SUBMITTED', 'Denne form er allerede afsendt. Klik på Ok og vent på at processen afslutter.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Du har ikke valgt betalings måde!.');

define('CATEGORY_COMPANY', '<b>[ Firma ]</b]');
define('CATEGORY_PERSONAL', '<b>[ Personlig ]</b>');
define('CATEGORY_ADDRESS', '<b>[ Adresse ]</b>');
define('CATEGORY_CONTACT', '<b>[ Kontakt ]</b>');
define('CATEGORY_OPTIONS', '<b>[ Mulige tilvalg ]</b>');
define('CATEGORY_PASSWORD', '<b>[ Password ]</b>');

define('ENTRY_COMPANY', 'Firma navn:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Køn:');
define('ENTRY_GENDER_ERROR', 'Vælg venligst køn');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Fornavn:');
define('ENTRY_FIRST_NAME_ERROR', 'Fornavn skal være min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tegn');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Efternavn:');
define('ENTRY_LAST_NAME_ERROR', 'Efternavn skal være min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tegn');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Fødselsdato:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Din fødselsdato skal være efter formatet DD/MM/ÅÅÅÅ (f.eks. 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '(f.eks. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-mail adresse:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'E-mail adressee skal være min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tegn');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Din email adresse ser ikke ud til at være korrekt!');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'E-mail adressen eksistere allerede!');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Gade:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Adresse skal være min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tegn');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Bydel:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Post nr:');
define('ENTRY_POST_CODE_ERROR', 'Postnr. skal være min ' . ENTRY_POSTCODE_MIN_LENGTH . ' tegn');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'By:');
define('ENTRY_CITY_ERROR', 'Bynavn skal være min ' . ENTRY_CITY_MIN_LENGTH . ' tegn');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Stat:');
define('ENTRY_STATE_ERROR', 'Stat skal bestå af minimum ' . ENTRY_STATE_MIN_LENGTH . ' bogstaver/tegn.');
define('ENTRY_STATE_ERROR_SELECT', 'Vælg venligst en stat fra rullened-menuen.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', 'Du skal vælge et land fra rullened-menuen.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Telefon nummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Telefonnr. skal være min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tegn');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax Nummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Nyhedsbrev:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Tilmeldt');
define('ENTRY_NEWSLETTER_NO', 'Fravalgt');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Password skal være min ' . ENTRY_PASSWORD_MIN_LENGTH . ' tegn');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Password bekræftigelsen skal være den samme som dit password.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Password bekræft:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Nuværende password:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Dit password skal bestå af minimum ' . ENTRY_PASSWORD_MIN_LENGTH . ' bogstaver/tegn.');
define('ENTRY_PASSWORD_NEW', 'Nyt password:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Dit nye password skal bestå af minimum ' . ENTRY_PASSWORD_MIN_LENGTH . ' bogstaver/tegn.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Password bekræftigelsen skal være det samme som dit nye password.');
define('PASSWORD_HIDDEN', '--SKJULT--');

define('FORM_REQUIRED_INFORMATION', '* Skal udfyldes');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Søgningen fandt:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> produkter)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> ordre)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> anmeldelser)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> nye varer)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Viser <b>%d</b> til <b>%d</b> (af <b>%d</b> tilbud)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Første side');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Forrige side');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Næste side');
define('PREVNEXT_TITLE_LAST_PAGE', 'Sidste side');
define('PREVNEXT_TITLE_PAGE_NO', 'Side %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Forrige del af %d Sider');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Næste del af %d sider');
define('PREVNEXT_BUTTON_FIRST', '<<Første');
define('PREVNEXT_BUTTON_PREV', '[<< Forrige]');
define('PREVNEXT_BUTTON_NEXT', '[Næste >>]');
define('PREVNEXT_BUTTON_LAST', 'Sidste>>');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Tilføj adresse');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Adressebog');
define('IMAGE_BUTTON_BACK', 'Tilbage');
define('IMAGE_BUTTON_BUY_NOW', 'Køb Nu');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Ret adresse');
define('IMAGE_BUTTON_CHECKOUT', 'Log af');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Bekræft ordre');
define('IMAGE_BUTTON_CONTINUE', 'Fortsæt');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Lad mig shoppe lidt mere');
define('IMAGE_BUTTON_DELETE', 'Slet');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Ret medlemskonto');
define('IMAGE_BUTTON_HISTORY', 'Tidligere ordrer');
define('IMAGE_BUTTON_LOGIN', 'Log på');
define('IMAGE_BUTTON_IN_CART', 'I indkøbskurven');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Adviséringer');
define('IMAGE_BUTTON_QUICK_FIND', 'Hurtig tilføj');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Slet advisering');
define('IMAGE_BUTTON_REVIEWS', 'Anmeldelser');
define('IMAGE_BUTTON_SEARCH', 'Søg');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Forsendelses valg');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Anbefal en ven');
define('IMAGE_BUTTON_UPDATE', 'Opdatér');
define('IMAGE_BUTTON_UPDATE_CART', 'Opdatér indkøbskurv');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Skriv anmeldelse');

define('SMALL_IMAGE_BUTTON_DELETE', 'Slet');
define('SMALL_IMAGE_BUTTON_EDIT', 'Ret');
define('SMALL_IMAGE_BUTTON_VIEW', 'Vis');

define('ICON_ARROW_RIGHT', 'mere');
define('ICON_CART', 'I indkøbskurv');
define('ICON_ERROR', 'Error');
define('ICON_SUCCESS', 'Success');
define('ICON_WARNING', 'Advarsel');

define('TEXT_GREETING_PERSONAL', 'Hej <span class="greetUser">%s!</span><br>Kunne du tænke dig at se <a href="%s"><u> de seneste nyheder</u></a>?<br>Denne tekst kan rettes i danish.php - variablen hedder TEXT_GREETING_PERSONAL');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Jeg er ikke %s, så jeg <a href="%s"><u>logger lige på</u></a> med mine egne konto oplysninger.</small>');
define('TEXT_GREETING_GUEST', 'Velkommen kære <span class="greetUser">gæst!</span><br>Denne tekst kan rettes i danish.php<br>Bare led efter variablen TEXT_GREETING_GUEST.');

define('TEXT_SORT_PRODUCTS', 'Sortér produkterne ');
define('TEXT_DESCENDINGLY', 'Faldende');
define('TEXT_ASCENDINGLY', 'stigende');
define('TEXT_BY', ' efter ');

define('TEXT_REVIEW_BY', 'efter %s');
define('TEXT_REVIEW_WORD_COUNT', '%s ord');
define('TEXT_REVIEW_RATING', 'Rating: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Tilføjet dato: %s');
define('TEXT_NO_REVIEWS', 'Der er i øjeblikket ingen anmeldelser.');

define('TEXT_NO_NEW_PRODUCTS', 'Der er i øjeblikket ingen nyheder.');

define('TEXT_UNKNOWN_TAX_RATE', 'Ukendt moms-værdi');

define('TEXT_REQUIRED', '<span class="errorText">Skal udfyldes</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> Kan ikke sende via den specificerede SMTP server. Undersøg dine php.ini setting og ret SMTP server hvis nødvendigt.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: I am able to write to the configuration file: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Warning: The sessions directory does not exist: ' . tep_session_save_path() . '. Sessions will not work until this directory is created.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the sessions directory: ' . tep_session_save_path() . '. Sessions will not work until the right user permissions are set.');
define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this php feature in php.ini and restart the web server.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_DOWNLOAD . '. Downloadable products will not work until this directory is valid.');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Ugyldig udløbs-dato for kreditkortet.<br>Kontroller dato og prøv igen.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Ugyldigt kreditkortnummer.<br>Kontroller nummeret og prøv igen.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'De første 4 cifre er indtastet som: %s<br>Hvis det er korrekt, er kortet ikke en type vi modtager.<br>Er det ikke korrekt, så prøv igen.');

/*
  The following copyright announcement can only be
  appropriately modified or removed if the layout of
  the site theme has been modified to distinguish
  itself from the default osCommerce-copyrighted
  theme.

  For more information please read the following
  Frequently Asked Questions entry on the osCommerce
  support site:

  http://www.oscommerce.com/community.php/faq,26/q,50

  Please leave this comment intact together with the
  following copyright announcement.
*/
define('FOOTER_TEXT_BODY', 'Copyright &copy; 2002 <a href="http://www.oscommerce.com" target="_blank">osCommerce</a><br>Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>');
// Dankort
define('CHECKOUT_BAR_ONLINE_PAYMENT', 'Transaktion'); // Added by JHK
define('IMAGE_BUTTON_PBSCC_ORDER', 'Online betaling'); // Added by JHK

/*
// LoginBox by Aubrey Kilian <aubrey@mycon.co.za>
require(DIR_WS_LANGUAGES . $language . '/' . 'loginbox.php');
*/

//BEGIN allprods modification
define('BOX_INFORMATION_ALLPRODS', 'Vis alle produkter');
//END allprods modification

// QuickPay added start
// Agreement to conditions
define('CONDITION_AGREEMENT', '<center><b>Denne ordre er omfattet af Lov om forbrugeraftaler ("Dørsalgs-loven"), hvilket betyder at du har 14 dages returret på alle varer. Hvis du fortryder dit køb, refunderer vi alle dine penge, undtagen fragten.<br><br>Du kan læse vores <a href="conditions.php" target="_blank">almindelige betingelser her</a>.</b>');
define('ERROR_NO_CONDITIONS', 'Læs venligst vores almindelige betingelser og marker i boksen at du accepterer dem. Hvis du ikke gør det, kan din ordre ikke fuldføres.');


define('CHECKOUT_BAR_ONLINE_PAYMENT', 'Transaktion');
define('IMAGE_BUTTON_PBSCC_ORDER', 'Online betaling');
define('DENUNCIATION', 'Ordren betales med ViaBill. Det skyldige beløb kan alene betales med frigørende virkning til ViaBill, som fremsender særskilt opkrævning. Betaling kan ikke ske ved modregning af krav, der udspringer af andre retsforhold');
// QuickPay added end
?>