<?php

return [

    'next'                  => 'अर्को',
    'refresh'               => 'पुनर्ताजगी गर्नुहोस्',

    'steps' => [
        'requirements'      => 'कृपया, आफ्नो होस्टिङ्ग प्रदायकलाई यी त्रुटिहरू सच्याउन आग्रह गर्नुहोस',
        'language'          => 'चरण १/३ : भाषा छान्ने',
        'database'          => 'चरण २/३ : डाटाबेस सेटअप',
        'settings'          => 'चरण ३/३ : कम्पनी र प्रशासनिक विवरण',
    ],

    'language' => [
        'select'            => 'भाषा छनोट गर्नुहोस्',
    ],

    'requirements' => [
        'enabled'           => ':feature सक्रिय गर्न जरूरी छ!',
        'disabled'          => ':feature निस्क्रिय जरूरी छ!',
        'extension'         => ':extension एक्सटेंशन स्थापित र लोड गर्न जरूरी छ!',
        'directory'         => ':directory डाईरेक्टरी लेखनयोग्य हुन जरूरी छ!',
        'executable'        => 'PHP CLI को कार्यान्वयन योग्य फाइल परिभाषित गरिएको छैन/काम गरीरहेको छैन वा यसको संस्करण : php_version बराबर वा यस भन्दा माथिल्लो छैन! कृपया, तपाईंको होस्टिंग कम्पनीलाई PHP_BINARY वा PHP_PATH वातावरण चर सही रूपमा सेट गर्न भन्नुहोस्।',
    ],

    'database' => [
        'hostname'          => 'होस्टको नाम',
        'username'          => 'प्रयोगकर्ता नाम',
        'password'          => 'प्रवेश शब्द',
        'name'              => 'डाटाबेस',
    ],

    'settings' => [
        'company_name'      => 'कम्पनीको नाम',
        'company_email'     => 'कम्पनीको ईमेल',
        'admin_email'       => 'प्रशासकको ईमेल',
        'admin_password'    => 'प्रशासकको प्रवेश शब्द',
    ],

    'error' => [
        'php_version'       => 'Error: Ask your hosting provider to use PHP :php_version or higher for both HTTP and CLI.',
        'connection'        => 'त्रुटि: डाटाबेसमा जोड्न सकिएन! कृपया, सम्पूर्ण विवरण ठीक छन् भनि निश्चित गर्नुहोस।',
    ],

];