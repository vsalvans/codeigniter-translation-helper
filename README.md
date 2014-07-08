codeigniter-translation-helper
==============================

An easy way to translate strings inspired on the 't' Drupal helper and it wraps the "lang" Codigniter method.

Installation
------------
Copy this file into helpers application folder.

This helpers requires Session library autoloaded. Add session library in autoload.php config file in libraries array.

Functions
---------

**t function**

    t($string_key, $filename = 'user', $tokens, $language)
    
This function translates $string_key into the $language used by loading the $filename translation file.
You can add tokens in the translation string that will be replaced by the values passed through the $tokens array.

This is an example of a lang file line:

    #English language file errors_lang.php
    $lang['field_required'] = 'The field %field is required';


    #Catalan language file errors_lang.php
    $lang['field_required'] = 'El camp %field és obligatori';
    
Then you can use t function like this:

    <?php echo t('field_required', 'errors', array('%field' => 'email'); ?>
    
By default $language is the saved in the session and if it's not saved it will use "default_language" from the config application file. But you can force a different language.

**get_lang function**

    get_lang()

It returns the current language saved in the current session.
You can change it by using set_userdata session function:

    $this->session->set_userdata('language','catalan');
