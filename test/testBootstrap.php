<?php

// Nuke the mcrypt functions and constants if we're using runkit. Ugh.
if (extension_loaded('mcrypt') && getenv('USE_RUNKIT') == TRUE) {
    runkit_function_rename('mcrypt_cbc', 'ext_mcrypt_mcrypt_cbc');
    runkit_function_rename('mcrypt_cfb', 'ext_mcrypt_mcrypt_cfb');
    runkit_function_rename('mcrypt_create_iv', 'ext_mcrypt_mcrypt_create_iv');
    runkit_function_rename('mcrypt_decrypt', 'ext_mcrypt_mcrypt_decrypt');
    runkit_function_rename('mcrypt_ecb', 'ext_mcrypt_mcrypt_ecb');
    runkit_function_rename('mcrypt_enc_get_algorithms_name', 'ext_mcrypt_mcrypt_enc_get_algorithms_name');
    runkit_function_rename('mcrypt_enc_get_block_size', 'ext_mcrypt_mcrypt_enc_get_block_size');
    runkit_function_rename('mcrypt_enc_get_iv_size', 'ext_mcrypt_mcrypt_enc_get_iv_size');
    runkit_function_rename('mcrypt_enc_get_key_size', 'ext_mcrypt_mcrypt_enc_get_key_size');
    runkit_function_rename('mcrypt_enc_get_modes_name', 'ext_mcrypt_mcrypt_enc_get_modes_name');
    runkit_function_rename('mcrypt_enc_get_supported_key_sizes', 'ext_mcrypt_mcrypt_enc_get_supported_key_sizes');
    runkit_function_rename('mcrypt_enc_is_block_algorithm_mode', 'ext_mcrypt_mcrypt_enc_is_block_algorithm_mode');
    runkit_function_rename('mcrypt_enc_is_block_algorithm', 'ext_mcrypt_mcrypt_enc_is_block_algorithm');
    runkit_function_rename('mcrypt_enc_is_block_mode', 'ext_mcrypt_mcrypt_enc_is_block_mode');
    runkit_function_rename('mcrypt_enc_self_test', 'ext_mcrypt_mcrypt_enc_self_test');
    runkit_function_rename('mcrypt_encrypt', 'ext_mcrypt_mcrypt_encrypt');
    runkit_function_rename('mcrypt_generic_deinit', 'ext_mcrypt_mcrypt_generic_deinit');
    runkit_function_rename('mcrypt_generic_end', 'ext_mcrypt_mcrypt_generic_end');
    runkit_function_rename('mcrypt_generic_init', 'ext_mcrypt_mcrypt_generic_init');
    runkit_function_rename('mcrypt_generic', 'ext_mcrypt_mcrypt_generic');
    runkit_function_rename('mcrypt_get_block_size', 'ext_mcrypt_mcrypt_get_block_size');
    runkit_function_rename('mcrypt_get_cipher_name', 'ext_mcrypt_mcrypt_get_cipher_name');
    runkit_function_rename('mcrypt_get_iv_size', 'ext_mcrypt_mcrypt_get_iv_size');
    runkit_function_rename('mcrypt_get_key_size', 'ext_mcrypt_mcrypt_get_key_size');
    runkit_function_rename('mcrypt_list_algorithms', 'ext_mcrypt_mcrypt_list_algorithms');
    runkit_function_rename('mcrypt_list_modes', 'ext_mcrypt_mcrypt_list_modes');
    runkit_function_rename('mcrypt_module_close', 'ext_mcrypt_mcrypt_module_close');
    runkit_function_rename('mcrypt_module_get_algo_block_size', 'ext_mcrypt_mcrypt_module_get_algo_block_size');
    runkit_function_rename('mcrypt_module_get_algo_key_size', 'ext_mcrypt_mcrypt_module_get_algo_key_size');
    runkit_function_rename('mcrypt_module_get_supported_key_sizes', 'ext_mcrypt_mcrypt_module_get_supported_key_sizes');
    runkit_function_rename('mcrypt_module_is_block_algorithm_mode', 'ext_mcrypt_mcrypt_module_is_block_algorithm_mode');
    runkit_function_rename('mcrypt_module_is_block_algorithm', 'ext_mcrypt_mcrypt_module_is_block_algorithm');
    runkit_function_rename('mcrypt_module_is_block_mode', 'ext_mcrypt_mcrypt_module_is_block_mode');
    runkit_function_rename('mcrypt_module_open', 'ext_mcrypt_mcrypt_module_open');
    runkit_function_rename('mcrypt_module_self_test', 'ext_mcrypt_mcrypt_module_self_test');
    runkit_function_rename('mcrypt_ofb', 'ext_mcrypt_mcrypt_ofb');
    runkit_constant_remove('MCRYPT_ENCRYPT', 'EXT_MCRYPT_MCRYPT_ENCRYPT');
    runkit_constant_remove('MCRYPT_DECRYPT', 'EXT_MCRYPT_MCRYPT_DECRYPT');
    runkit_constant_remove('MCRYPT_DEV_RANDOM', 'EXT_MCRYPT_MCRYPT_DEV_RANDOM');
    runkit_constant_remove('MCRYPT_DEV_URANDOM', 'EXT_MCRYPT_MCRYPT_DEV_URANDOM');
    runkit_constant_remove('MCRYPT_RAND', 'EXT_MCRYPT_MCRYPT_RAND');
    runkit_constant_remove('MCRYPT_3DES', 'EXT_MCRYPT_MCRYPT_3DES');
    runkit_constant_remove('MCRYPT_ARCFOUR_IV', 'EXT_MCRYPT_MCRYPT_ARCFOUR_IV');
    runkit_constant_remove('MCRYPT_ARCFOUR', 'EXT_MCRYPT_MCRYPT_ARCFOUR');
    runkit_constant_remove('MCRYPT_BLOWFISH', 'EXT_MCRYPT_MCRYPT_BLOWFISH');
    runkit_constant_remove('MCRYPT_BLOWFISH_COMPAT', 'EXT_MCRYPT_MCRYPT_BLOWFISH_COMPAT');
    runkit_constant_remove('MCRYPT_CAST_128', 'EXT_MCRYPT_MCRYPT_CAST_128');
    runkit_constant_remove('MCRYPT_CAST_256', 'EXT_MCRYPT_MCRYPT_CAST_256');
    runkit_constant_remove('MCRYPT_CRYPT', 'EXT_MCRYPT_MCRYPT_CRYPT');
    runkit_constant_remove('MCRYPT_DES', 'EXT_MCRYPT_MCRYPT_DES');
    runkit_constant_remove('MCRYPT_ENIGNA', 'EXT_MCRYPT_MCRYPT_ENIGNA');
    runkit_constant_remove('MCRYPT_GOST', 'EXT_MCRYPT_MCRYPT_GOST');
    runkit_constant_remove('MCRYPT_LOKI97', 'EXT_MCRYPT_MCRYPT_LOKI97');
    runkit_constant_remove('MCRYPT_PANAMA', 'EXT_MCRYPT_MCRYPT_PANAMA');
    runkit_constant_remove('MCRYPT_RC2', 'EXT_MCRYPT_MCRYPT_RC2');
    runkit_constant_remove('MCRYPT_RIJNDAEL_128', 'EXT_MCRYPT_MCRYPT_RIJNDAEL_128');
    runkit_constant_remove('MCRYPT_RIJNDAEL_192', 'EXT_MCRYPT_MCRYPT_RIJNDAEL_192');
    runkit_constant_remove('MCRYPT_RIJNDAEL_256', 'EXT_MCRYPT_MCRYPT_RIJNDAEL_256');
    runkit_constant_remove('MCRYPT_SAFER64', 'EXT_MCRYPT_MCRYPT_SAFER64');
    runkit_constant_remove('MCRYPT_SAFER128', 'EXT_MCRYPT_MCRYPT_SAFER128');
    runkit_constant_remove('MCRYPT_SAFERPLUS', 'EXT_MCRYPT_MCRYPT_SAFERPLUS');
    runkit_constant_remove('MCRYPT_SERPENT', 'EXT_MCRYPT_MCRYPT_SERPENT');
    runkit_constant_remove('MCRYPT_THREEWAY', 'EXT_MCRYPT_MCRYPT_THREEWAY');
    runkit_constant_remove('MCRYPT_TRIPLEDES', 'EXT_MCRYPT_MCRYPT_TRIPLEDES');
    runkit_constant_remove('MCRYPT_TWOFISH', 'EXT_MCRYPT_MCRYPT_TWOFISH');
    runkit_constant_remove('MCRYPT_WAKE', 'EXT_MCRYPT_MCRYPT_WAKE');
    runkit_constant_remove('MCRYPT_XTEA', 'EXT_MCRYPT_MCRYPT_XTEA');
    runkit_constant_remove('MCRYPT_IDEA', 'EXT_MCRYPT_MCRYPT_IDEA');
    runkit_constant_remove('MCRYPT_MARS', 'EXT_MCRYPT_MCRYPT_MARS');
    runkit_constant_remove('MCRYPT_RC6', 'EXT_MCRYPT_MCRYPT_RC6');
    runkit_constant_remove('MCRYPT_SKIPJACK', 'EXT_MCRYPT_MCRYPT_SKIPJACK');
    runkit_constant_remove('MCRYPT_MODE_CBC', 'EXT_MCRYPT_MCRYPT_MODE_CBC');
    runkit_constant_remove('MCRYPT_MODE_CFB', 'EXT_MCRYPT_MCRYPT_MODE_CFB');
    runkit_constant_remove('MCRYPT_MODE_ECB', 'EXT_MCRYPT_MCRYPT_MODE_ECB');
    runkit_constant_remove('MCRYPT_MODE_NOFB', 'EXT_MCRYPT_MCRYPT_MODE_NOFB');
    runkit_constant_remove('MCRYPT_MODE_OFB', 'EXT_MCRYPT_MCRYPT_MODE_OFB');
    runkit_constant_remove('MCRYPT_MODE_STREAM', 'EXT_MCRYPT_MCRYPT_MODE_STREAM');
}

include_once "../vendor/autoload.php";