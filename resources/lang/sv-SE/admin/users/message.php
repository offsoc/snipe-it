<?php

return array(

    'accepted'                  => 'Du har framgångsrikt godkänt den här tillgången.',
    'declined'                  => 'Du har framgångsrikt nekat den här tillgången.',
    'bulk_manager_warn'	        => 'Dina användare har uppdaterats, men ansvarigfältet sparades inte eftersom den ansvarige du valt även finns i användarlistan varvid en användare inte kan ange sig själv som ansvarig. Vänligen välj dina användare igen, med den ansvarige exkluderad ur valen.',
    'user_exists'               => 'Användaren existerar redan!',
    'user_not_found'            => 'Användaren existerar inte eller så har du inte behörighet att se den.',
    'user_login_required'       => 'Inloggningsfältet krävs',
    'user_has_no_assets_assigned' => 'Inga tillgångar som för närvarande tilldelats användaren.',
    'user_password_required'    => 'Lösenordet krävs.',
    'insufficient_permissions'  => 'Otillräckliga tillstånd.',
    'user_deleted_warning'      => 'Den här användaren har raderats. Du måste återställa den här användaren för att redigera dem eller tilldela dem nya tillgångar.',
    'ldap_not_configured'        => 'LDAP-integrationen har inte konfigurerats för den här installationen.',
    'password_resets_sent'      => 'De valda användare som är aktiverade och har en giltig e-postadress har skickats en länk för att återställa lösenordet.',
    'password_reset_sent'       => 'En återställningslänk för lösenord har skickats till :email!',
    'user_has_no_email'         => 'Den här användaren har ingen e-postadress i sin profil.',
    'log_record_not_found'        => 'Det gick inte att hitta en matchande loggpost för den här användaren.',


    'success' => array(
        'create'    => 'Användaren skapades med framgång.',
        'update'    => 'Användaren har uppdaterats.',
        'update_bulk'    => 'Användarna uppdaterades!',
        'delete'    => 'Användaren har tagits bort.',
        'ban'       => 'Användaren har blivit bannlyst.',
        'unban'     => 'Användaren var framgångsrikt obuten.',
        'suspend'   => 'Användaren avbröts.',
        'unsuspend' => 'Användaren blev framgångsrikt uppslagen.',
        'restored'  => 'Användaren lyckades återställas.',
        'import'    => 'Användare importerades framgångsrikt.',
    ),

    'error' => array(
        'create' => 'Det var ett problem att skapa användaren. Var god försök igen.',
        'update' => 'Det gick inte att uppdatera användaren. Var god försök igen.',
        'delete' => 'Det gick inte att ta bort användaren. Var god försök igen.',
        'delete_has_assets' => 'Den här användaren har objekt tilldelade och kunde inte raderas.',
        'delete_has_assets_var' => 'Den här användaren har fortfarande en tilldelad tillgång. Vänligen checka in den först.|Den här användaren har fortfarande :count tillgångar tilldelade. Vänligen check in dem först.',
        'delete_has_licenses_var' => 'Den här användaren har en licensplats tilldelad. Vänligen checka in den först.|Den här användaren har fortfarande :count licensplatser tilldelade. Vänligen checka in dem först.',
        'delete_has_accessories_var' => 'Den här användaren har fortfarande ett tillbehör tilldelat. Vänligen checka in det först.|Den här användaren har fortfarande :count tillbehör tilldelade. Vänligen checka in dem först.',
        'delete_has_locations_var' => 'Den här användaren hanterar fortfarande en plats. Välj en annan ansvarig först.|Den här användaren hanterar fortfarande :count platser. Välj en annan ansvarig först.',
        'delete_has_users_var' => 'Den här användaren hanterar fortfarande en annan användare. Välj en annan ansvarig för den användaren först. Den här användaren hanterar fortfarande :count användare. Välj en annan ansvarig för dem först.',
        'unsuspend' => 'Det uppstod ett problem som avbröt användaren. Var god försök igen.',
        'import'    => 'Det gick inte att importera användare. Var god försök igen.',
        'asset_already_accepted' => 'Denna tillgång har redan godkänts.',
        'accept_or_decline' => 'Du måste antingen godkänna eller neka den här tillgången.',
        'cannot_delete_yourself' => 'Vi skulle må riktigt dåligt om du raderade dig själv, ta dig en funderare igen.',
        'incorrect_user_accepted' => 'Den tillgång du försökte acceptera har inte checkats ut till dig.',
        'ldap_could_not_connect' => 'Det gick inte att ansluta till LDAP-servern. Kontrollera din LDAP-serverkonfiguration i LDAP-konfigurationsfilen. <br>Fel från LDAP-servern:',
        'ldap_could_not_bind' => 'Kunde inte binda till LDAP-servern. Kontrollera din LDAP-serverkonfiguration i LDAP-konfigurationsfilen. <br>Fel från LDAP-servern:',
        'ldap_could_not_search' => 'Det gick inte att söka på LDAP-servern. Kontrollera din LDAP-serverkonfiguration i LDAP-konfigurationsfilen. <br>Fel från LDAP-servern:',
        'ldap_could_not_get_entries' => 'Det gick inte att få poster från LDAP-servern. Kontrollera din LDAP-serverkonfiguration i LDAP-konfigurationsfilen. <br>Fel från LDAP-servern:',
        'password_ldap' => 'Lösenordet för det här kontot hanteras av LDAP / Active Directory. Vänligen kontakta din IT-avdelning för att ändra ditt lösenord.',
        'multi_company_items_assigned' => 'Denna användare har objekt tilldelade som tillhör ett annat företag. Vänligen checka in dem eller redigera deras företag.'
    ),

    'deletefile' => array(
        'error'   => 'Filen har inte tagits bort. Var god försök igen.',
        'success' => 'Filen har tagits bort.',
    ),

    'upload' => array(
        'error'   => 'Fil (er) inte uppladdade. Var god försök igen.',
        'success' => 'Filer som har laddats upp.',
        'nofiles' => 'Du valde inte några filer för uppladdning',
        'invalidfiles' => 'En eller flera av dina filer är för stora eller är en filtyp som inte är tillåten. Tillåtna filtyper är png, gif, jpg, doc, docx, pdf och txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'Den här användaren har ingen e-postadress.',
        'success' => 'Användaren har meddelats om sitt nuvarande inventarie.'
    )
);