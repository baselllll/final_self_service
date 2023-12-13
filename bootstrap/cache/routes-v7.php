<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KtdWjcHwjRiuvfR5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manifest.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laravelpwa.manifest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laravelpwa.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zMRR0O5FWD9L7Gdt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upload_files_template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::idSsUcMXvYy4An6z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s4EcMXVP6s31ZzA0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ALT6pwxTXRwcBXD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/close-different-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'close-different-login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/continue_process_absence' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'continue_process_absence',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate-pdf-version' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sYxfPkmgrCimFFL2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_otp_for_check_before' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_otp_for_check_before',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_otp_email_for_check_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_otp_email_for_check_otp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_otp_for_check_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_otp_for_check_otp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_otp_for_register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_otp_for_register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_phone_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_phone_profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_email_for_register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_email_for_register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_email_for_check_before' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_email_for_check_before',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login-page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-user-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-user-view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/emp_quama_verified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'emp_quama_verified',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login-auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth-login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-otp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/portal-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bmL83AAv4WBdmkSj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-employee-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-employee-information',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clearance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insert_eos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'insert_eos',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile-employee',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pending-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pending-employee',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/services-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services-category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/certificate-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'certificate-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loan-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loan-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/end-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'end-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insurance-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'insurance-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/letter-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'letter-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/other-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'other-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/services-sub_category_attribute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services-sub_category_attribute',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-service-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-service-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-special-service-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-special-service-detail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-accruals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-accruals',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/approve-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'approve-request',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reject-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reject-request',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delegation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegation-view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delegation-history-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegation-history-employee',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-delegate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-delegate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-delegate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-delegate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-delegate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-delegate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taswaya' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taswaya',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reject-request-taswaya' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reject-request-taswaya',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/approve-request-taswaya' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'approve-request-taswaya',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'help',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_replacement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_replacement',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-replacements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-replacements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upload_image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload_image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/home-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/all_services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::juDwRail5h1opcVP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/active_session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'active_session',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/non_register_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'non_register_user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/otp_different_device' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'otp_different_device',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/register_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register_user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tracking_r' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracking_r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/feature_new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/add_details_feature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_details_feature',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/manual_add_absence' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manual_add_absence',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/edit\\-template/([^/]++)(*:105)|/ge(?|nerate\\-pdf/([^/]++)(*:139)|t\\-(?|details/([^/]++)(*:169)|attribute\\-special\\-service/([^/]++)/([^/]++)/([^/]++)(*:231)))|/s(?|e(?|t\\-locale/([^/]++)(*:268)|rvice\\-details/([^/]++)/([^/]++)/([^/]++)(*:317))|pecial\\-(?|case\\-unauthorized/([^/]++)/([^/]++)/([^/]++)(*:382)|service\\-details/([^/]++)/([^/]++)(*:424)))|/delete\\-(?|service/([^/]++)(*:462)|delegate/([^/]++)(*:487))|/update\\-view\\-delegate/([^/]++)(*:528))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dartsjNiNxy8kk0K',
          ),
          1 => 
          array (
            0 => 'transition_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate-pdf',
          ),
          1 => 
          array (
            0 => 'transaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-details',
          ),
          1 => 
          array (
            0 => 'transaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-attribute-special-service',
          ),
          1 => 
          array (
            0 => 'flex_id',
            1 => 'service_type',
            2 => 'main_service_request_sub',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setLocale',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service-details',
          ),
          1 => 
          array (
            0 => 'service_type',
            1 => 'absence_attendance_type_id',
            2 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      382 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'special-case-unauthorized',
          ),
          1 => 
          array (
            0 => 'service_type',
            1 => 'absence_attendance_type_id',
            2 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'special-service-details',
          ),
          1 => 
          array (
            0 => 'id_flex_num',
            1 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-service',
          ),
          1 => 
          array (
            0 => 'transaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-delegate',
          ),
          1 => 
          array (
            0 => 'delegate_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-view-delegate',
          ),
          1 => 
          array (
            0 => 'delegate_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KtdWjcHwjRiuvfR5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::KtdWjcHwjRiuvfR5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laravelpwa.manifest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manifest.json',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@manifestJson',
        'controller' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@manifestJson',
        'as' => 'laravelpwa.manifest',
        'namespace' => 'LaravelPWA\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'laravelpwa.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@offline',
        'controller' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@offline',
        'as' => 'laravelpwa.',
        'namespace' => 'LaravelPWA\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zMRR0O5FWD9L7Gdt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006320000000000000000";}";s:4:"hash";s:44:"mmkdgInOTvbEqTVxhgaZsSWGdKCl7tUAD4PGZguX/HQ=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zMRR0O5FWD9L7Gdt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::idSsUcMXvYy4An6z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upload_files_template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:325:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function (){
    $sms = new \\App\\Helper\\SpecialSpecifService();
    $sms->upload_documents_and_create();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006340000000000000000";}";s:4:"hash";s:44:"vF57fwkSvc8b90uXhMoNuMmr+A30li2ZmDop8DX97ZA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::idSsUcMXvYy4An6z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s4EcMXVP6s31ZzA0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:311:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:93:"function () {
        return \\Illuminate\\Support\\Facades\\Redirect::route(\'login-page\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006370000000000000000";}";s:4:"hash";s:44:"kqn4c3WNFnVNZs6ooo0axt5GGODa7+u+TEKqkYDtBbQ=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s4EcMXVP6s31ZzA0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7ALT6pwxTXRwcBXD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@generateReportDisplayData',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@generateReportDisplayData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7ALT6pwxTXRwcBXD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dartsjNiNxy8kk0K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-template/{transition_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Helper\\SmsVerifyHelper@EditOnTemplate',
        'controller' => 'App\\Helper\\SmsVerifyHelper@EditOnTemplate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dartsjNiNxy8kk0K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'close-different-login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'close-different-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@closeDifferentLogin',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@closeDifferentLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'close-different-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'continue_process_absence' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'continue_process_absence',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@continueProcessAbsence',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@continueProcessAbsence',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'continue_process_absence',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sYxfPkmgrCimFFL2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate-pdf-version',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:281:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:63:"function (){
        return \\view(\'frontend.report-pdf\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000063d0000000000000000";}";s:4:"hash";s:44:"uSQ5tWsORu1xWaMq8nDGZXZIOmsYR7nX6z9BK7ilhPw=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sYxfPkmgrCimFFL2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generate-pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate-pdf/{transaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@generatePdf',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@generatePdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generate-pdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setLocale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'set-locale/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:404:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:185:"function ($locale) {
        if (\\in_array($locale, \\config(\'app.available_locales\'))) {
            \\session([\'locale\' => $locale]);
        }
        return \\redirect()->back();
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006400000000000000000";}";s:4:"hash";s:44:"q9TVzXWSVUqO0h5eX17wkqrAoJ90+a6qDcF1uxRijxs=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setLocale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_otp_for_check_before' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_otp_for_check_before',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_for_check_before',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_for_check_before',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_otp_for_check_before',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_otp_email_for_check_otp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_otp_email_for_check_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_email_for_check_otp',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_email_for_check_otp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_otp_email_for_check_otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_otp_for_check_otp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_otp_for_check_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_for_check_otp',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_for_check_otp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_otp_for_check_otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_otp_for_register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_otp_for_register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_for_register',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_otp_for_register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_otp_for_register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_phone_profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_phone_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@update_phone_profile',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@update_phone_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_phone_profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_email_for_register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send_email_for_register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_email_for_register',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_email_for_register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_email_for_register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_email_for_check_before' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_email_for_check_before',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_email_for_check_before',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@send_email_for_check_before',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_email_for_check_before',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login-page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@index',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login-page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-user-view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-user-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@UpdateUser_view',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@UpdateUser_view',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-user-view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'emp_quama_verified' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'emp_quama_verified',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@emp_quama_verified',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@emp_quama_verified',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'emp_quama_verified',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@UpdateUser',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@UpdateUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete-service/{transaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@DeleteService',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@DeleteService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth-login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login-auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@Login',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@Login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-otp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@SendOtp',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@SendOtp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send-otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bmL83AAv4WBdmkSj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'portal-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\PortalServicesController@index',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\PortalServicesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bmL83AAv4WBdmkSj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-employee-information' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-employee-information',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@GetEmployeeInformation',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@GetEmployeeInformation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-employee-information',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clearance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@clearance',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@clearance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'clearance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'insert_eos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'insert_eos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@insertEos',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@insertEos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'insert_eos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-details/{transaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@getDetails',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@getDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile-employee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile-employee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pending-employee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pending-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@pendingService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@pendingService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pending-employee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@servicesCategory',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@servicesCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services-category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'certificate-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'certificate-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@certificateService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@certificateService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'certificate-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loan-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loan-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@loanService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@loanService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loan-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'end-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'end-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@endService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@endService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'end-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-attribute-special-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-attribute-special-service/{flex_id}/{service_type}/{main_service_request_sub}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@getAttributeSpecialService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@getAttributeSpecialService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-attribute-special-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'insurance-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'insurance-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@InsuranceService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@InsuranceService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'insurance-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'letter-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'letter-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@LetterService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@LetterService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'letter-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'other-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'other-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@OtherService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@OtherService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'other-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services-sub_category_attribute' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services-sub_category_attribute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@servicesSubCategoryAttribute',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@servicesSubCategoryAttribute',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services-sub_category_attribute',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service-details/{service_type}/{absence_attendance_type_id}/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@index',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'special-case-unauthorized' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'special-case-unauthorized/{service_type}/{absence_attendance_type_id}/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@specialcaseunauthorized',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@specialcaseunauthorized',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'special-case-unauthorized',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'special-service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'special-service-details/{id_flex_num}/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@SpecialService',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@SpecialService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'special-service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-service-detail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-service-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@AddServiceDetail',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@AddServiceDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add-service-detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-special-service-detail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-special-service-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@AddSpecialServiceDetail',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@AddSpecialServiceDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add-special-service-detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-accruals' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-accruals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@CalculateAccruals',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ServiceDetailController@CalculateAccruals',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-accruals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'approve-request' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'approve-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@ApproveRequest',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@ApproveRequest',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'approve-request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reject-request' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reject-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@RejectRequest',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@RejectRequest',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reject-request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegation-view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delegation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@Delegation',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@Delegation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delegation-view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegation-history-employee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delegation-history-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@Delegation',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@Delegation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delegation-history-employee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-delegate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create-delegate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@createDelegate',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@createDelegate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-delegate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-delegate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-delegate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@storeDelegate',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@storeDelegate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store-delegate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-view-delegate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-view-delegate/{delegate_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@updateDelegateView',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@updateDelegateView',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-view-delegate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-delegate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-delegate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@updateDelegate',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@updateDelegate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-delegate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-delegate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete-delegate/{delegate_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@deleteDelegate',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\MangerController@deleteDelegate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete-delegate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taswaya' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taswaya',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@taswaya',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@taswaya',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taswaya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reject-request-taswaya' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reject-request-taswaya',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@Rejecttaswaya',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@Rejecttaswaya',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reject-request-taswaya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'approve-request-taswaya' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'approve-request-taswaya',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@Approvetaswaya',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@Approvetaswaya',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'approve-request-taswaya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'help' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@help',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\HomeController@help',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'help',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_replacement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_replacement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@update_replacement',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@update_replacement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_replacement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-replacements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-replacements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@get_replacements',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@get_replacements',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-replacements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upload_image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload_image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'check.allowed.location',
          2 => 'employee.session',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@upload_image',
        'controller' => 'App\\Http\\Controllers\\FrontControllers\\ProfileEmployeeController@upload_image',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upload_image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/home-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@home',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@home',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'home-dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::juDwRail5h1opcVP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/all_services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@generateReportDisplayData',
        'controller' => 'App\\Http\\Controllers\\BackEndControllers\\LoginController@generateReportDisplayData',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::juDwRail5h1opcVP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'active_session' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/active_session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@active_session',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@active_session',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'active_session',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'non_register_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/non_register_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@non_register_user',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@non_register_user',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'non_register_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'otp_different_device' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/otp_different_device',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@otp_different_device',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@otp_different_device',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'otp_different_device',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/register_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@register_user',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@register_user',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'register_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tracking_r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tracking_r',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@tracking_r',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@tracking_r',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'tracking_r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/feature_new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@feature_new',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@feature_new',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'feature_new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_details_feature' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/add_details_feature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@add_details_feature',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@add_details_feature',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'add_details_feature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manual_add_absence' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/manual_add_absence',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@manual_add_absence',
        'controller' => 'App\\Http\\Controllers\\DashboardControllers\\ProcessMainController@manual_add_absence',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'manual_add_absence',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
