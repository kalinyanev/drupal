<?
/************************************************
 * strings that confDerectivesPHP uses: short and full descriptions
 ************************************************/
$txt_values = array(
	// engine
	'engine_short' => 'Enable the PHP scripting language engine under Apache',
	'engine_full' => 'Enables/disables use of the PHP scripting language engine.<BR> <BR> <B>Note:</B> Disabling this directive is, in practice, useful only in the Apache module version of PHP, where it can be used by sites that need to turn PHP parsing on and off on a per-directory or per-virtual-server basis. By setting the value of <B>engine</B> to be On/Off in the appropriate places in the <I>httpd.conf</I> file, PHP can be selectively enabled/disabled.',

	// short_open_tag
	'short_open_tag_short' => 'Tells whether the short form (&lt;? ?>) of an open tag should be allowed',
	'short_open_tag_full' => 'Enables/disables the use of the short form of the PHP opening tag (<B>&lt;? ?></B>). If this directive is disabled, you have to use the long form of the PHP opening tag (<B>&lt;?php ?></B>). The <B>&lt;script>...&lt;/script></B> tags, like the long form tag, are recognized regardless of the value of this directive.<BR> <BR> <B>Note:</B> PHP can be used in combination with XML <B>only</B> if this directive is disabled.',

	// asp_tags
	'asp_tags_short' => 'Enables the use of ASP-like tags in addition to the usual &lt;?php ?>',
	'asp_tags_full' => 'Enables/disables the use of ASP-like <B>&lt;% %></B> tags, in addition to the usual <B>&lt;?php ?></B> tags. Enabling this directive also enables the variable-value printing shorthand of the form <B>&lt;%=$value %></B>. For more information, see <I>Escaping from HTML</I>.',

	// y2k_compliance
	'y2k_compliance_short' => 'Enforce year 2000 compliance',
	'y2k_compliance_full' => 'Specifies whether or not the PHP script should be made year-2000 compliant.<BR> <BR> <B><I>Warning:</I></B> Making the PHP script Y2K compliant (by setting this directive to On) will cause problems with non-Y2K-compliant browsers.',

	// output_buffering
	'output_buffering_short' => 'Size of the output buffering',
	'output_buffering_full' => 'Enables/disables output buffering. Output buffering enables you to send header lines (including cookies) even after you have sent the body content, however, PHP\'s output layer will be slowed down a bit. In addition to enabling/disabling output buffering for all files by setting this directive to ON/OFF, you can also selectively enable/disable output buffering at run time using the PHP functions <I>ob_start, ob_end_clean, ob_end_flush,</I> and <I>ob_implicit_flush</I>.',

	// implicit_flush
	'implicit_flush_short' => 'Implicit (automatic) flush',
	'implicit_flush_full' => 'Specifies whether or not to instruct PHP to tell the output layer to flush itself automatically after every output block. If this directive is set to ON, it is equivalent to calling the PHP function <I>flush()</I> after every call to <I>print()</I> and <I>echo()</I> and for every HTML block.<BR> <BR> <B><I>Warning:</I></B> This directive is generally recommended for <B>debugging purposes only</B>, since turning it on can <B>seriously degrade performance</B>.',

	// allow_call_time_pass_reference
	'allow_call_time_pass_reference_short' => 'Enable the ability to force arguments to be passed by reference at function',
	'allow_call_time_pass_reference_full' => 'Enables/disables passing arguments by reference at function-call time. <B>Note:</B> This method of passing arguments by reference is <B>not recommended</B>, and future versions of PHP/Zend are likely <B>not to support it</B>. The correct method of passing arguments by reference is by using the function declaration. You are encouraged to try setting this directive to 0 and making sure that your scripts still work properly, to ensure that they will work with future versions of the language that do not support this option. (A warning will be issued each time your script uses this feature, and the argument will be passed by value instead of by reference.)<BR> <BR> <B>Note:</B> The default value under PHP 4 is 0 (since when calling a function, it is not possible to force a variable to be passed by reference) and under PHP 3 it is 1.',

	// precision
	'precision_short' => 'The number of significant digits displayed in floating point numbers',
	'precision_full' => 'Specifies the number of significant digits displayed after the decimal point for floating point numbers. See also <I>bcmath.scale</I>.',

	// expose_php
	'expose_php_short' => 'Decides whether PHP may expose the fact that it is installed on the server',
	'expose_php_full' => 'Specifies whether PHP can expose the fact that it is installed on the server, for example, by adding its signature to the web-server header. Exposing PHP is not a security threat in any way, but it does make it possible to determine that your server uses PHP.<BR> <BR> <B>Note:</B> This directive takes priority over <I>expose_launchpad</I> directive.',

	// max_execution_time
	'max_execution_time_short' => 'Maximum time in seconds a script is allowed to run before it is terminated',
	'max_execution_time_full' => 'Specifies the maximum time in seconds that one script is allowed to run before it is terminated by the parser. This helps prevent poorly written scripts from tying up the server. The present default value is 30 seconds.',

	// memory_limit
	'memory_limit_short' => 'Maximum of amount of memory in bytes that a script is allowed to allocate',
	'memory_limit_full' => 'Specifies the maximum amount of memory in bytes that one script is allowed to allocate. This helps prevent poorly written scripts from tying up all the available memory on a server. The present default value is 8MB.',

	// register_globals
	'register_globals_short' => 'Tells whether or not to register the EGPCS as global variables',
	'register_globals_full' => 'Specifies whether or not to register the EGPCS variables (Environment, Get, Post, Cookie, and Server built-in) as global variables. If you do not want to clutter the global scope of your scripts with user data, turn off this directive; you can still access the EGPCS variables by turning on the directive <I>track_vars</I> and then using the <I>$HTTP_*_VARS[]</I> arrays.',

	// register_argc_argv
	'register_argc_argv_short' => 'Tells PHP whether to declare the argv & argc variables',
	'register_argc_argv_full' => 'Specifies whether or not to instruct PHP to declare the variables <I>argv</I> and <I>argc</I> (they are used for holding the GET information). If you do not use these variables, then disable this directive for increased performance.<BR> <BR> <B>Note:</B> The default value under PHP 4 is 0 (both <I>argv</I> and <I>argc</I> are partially redundant) and under PHP 3 it is 1.',

	// post_max_size
	'post_max_size_short' => 'Sets max size of post data allowed',
	'post_max_size_full' => 'Maximum size of POST data that PHP will accept.',

	// include_path
	'include_path_short' => 'List of directories where PHP looks for files',
	'include_path_full' => 'Defines a list of directories where the functions <I>require()</I>, <I>include()</I>, and <I>fopen_with_path()</I> will search for files. The format is same as the system\'s <I>PATH</I> environment variable: a list of directories separated by colons (:) in UNIX or by semicolons (;) in Windows. The default value for this directive is an empty string (""), that is, only the current directory will be searched.<BR> <BR> Example of a UNIX include_path:<BR> include_path=.:/home/httpd/php-lib<BR> <BR> Example of a Windows include_path:<BR> include_path=".;c:\www\phplib"<BR>',

	// doc_root
	'doc_root_short' => 'Root directory of PHP on the server',
	'doc_root_full' => 'Specifies the PHP root directory on the server. If PHP is configured in Safe Mode (the directive <I>safe_mode</I> is enabled), no files outside this directory are served.<BR> <BR> <B>Note:</B> This directive is used only if it is not empty.',

	// user_dir
	'user_dir_short' => 'The base name of the directory used on a home directory for PHP file',
	'user_dir_full' => 'Defines the base name of the directory used on a user\'s home directory for PHP files, for example, public_html. This is the directory under which PHP opens the script using /~username.<BR> <BR> <B>Note:</B> This directive is used <B>only</B> if it is not empty.',

	// file_uploads
	'file_uploads_short' => 'Whether or not to allow HTTP file uploads',
	'file_uploads_full' => 'Whether to allow HTTP file uploads.',

	// upload_tmp_dir
	'upload_tmp_dir_short' => 'The temporary directory used for storing files when doing file upload',
	'upload_tmp_dir_full' => 'Defines the temporary directory to use for storing files when doing HTTP file upload. If no directory is specified, the system default directory is used.<BR> <BR> <B>Note:</B> This directory <B>must be writable</B> by the user currently running PHP.',

	// upload_max_filesize
	'upload_max_filesize_short' => 'The maximum size of an uploaded file',
	'upload_max_filesize_full' => 'Specifies the maximum file size in bytes that can be uploaded. Default is 2MB.<BR> <BR> <B>Note:</B> The <I>MAX_FILE_SIZE</I> item of the PHP file upload feature cannot specify a file size that is greater than the size set in this directive.',

	// extension_dir
	'extension_dir_short' => 'In what directory PHP should look for dynamically loadable extensions',
	'extension_dir_full' => 'Defines the directory in which PHP should look for dynamically loadable extensions (modules).',

	// enable_dl
	'enable_dl_short' => 'This directive is really only useful in the Apache module version of PHP',
	'enable_dl_full' => 'Specifies whether or not to enable the PHP function <I>dl()</I>, which loads PHP extensions at run time.<BR> <BR> <B>Note:</B> The function <I>dl()</I> does <B>not</B> work correctly under multithreaded servers, such as IIS or Zeus, and is automatically disabled on these servers.',

	// safe_mode
	'safe_mode_short' => 'Whether to enable safe mode of PHP',
	'safe_mode_full' => 'Enables/disables Safe Mode. Enabling Safe Mode imposes several restrictions on what PHP can do, for example, files can be opened only if they are in the document root. (See also the entries for <I>safe_mode_xxx</I> and <I>enable_dl</I>.) For further information, read the <I>Security chapter</I>.<BR> <BR> <B>Note:</B> CGI users should <B>always</B> enable Safe Mode.',

	// safe_mode_exec_dir
	'safe_mode_exec_dir_short' => 'Safe Mode execution directory',
	'safe_mode_exec_dir_full' => 'Letting the user run certain programs may constitute a potential security breach. This directive contains a directory name, such as <I>usr/local/bin</I>. When PHP is in Safe Mode, the user can run only those programs located in the given directory; <I>system()</I> and other functions that execute system programs will refuse to run programs in other directories.<BR> <BR> <B><I>Warning:</I></B> If this directive is empty, PHP will let the user run <B>any</B> program.',

	// safe_mode_allowed_env_vars
	'safe_mode_allowed_env_vars_short' => 'Setting certain environment variables may be a potential security breach',
	'safe_mode_allowed_env_vars_full' => 'Letting the user set certain environment variables may constitute a potential security breach. This directive specifies a comma-delimited list of prefixes. When PHP is in Safe Mode, the user can modify only those environment variables whose names begin with the prefixes in this list. By default, the user can set only those environment variables that begin with PHP_ (for example, PHP_MY=BAR).<BR> <BR> <B><I>Warning:</I></B> If this directive is empty, PHP will let the user modify <B>any</B> environment variable!',

	// safe_mode_protected_env_vars
	'safe_mode_protected_env_vars_short' => 'Environment variables that are not changeable using putenv()',
	'safe_mode_protected_env_vars_full' => 'Letting the user set certain environment variables (for example, by using <I>putenv()</I>) may constitute a potential security breach. This directive specifies a comma-delimited list of environment variables that the end user cannot change when PHP is in Safe Mode. These variables are protected even if <B>safe_mode_allowed_env_vars</B> is set to allow changing them.',

	// disable_functions
	'disable_functions_short' => 'This directive allows you to disable certain functions for security reasons',
	'disable_functions_full' => 'Letting the user call certain functions may constitute a potential security breach. This directive specifies a comma-delimited list of functions names that are disabled for security reasons. This directive is <B>not</b> affected by whether Safe Mode is enabled or disabled.<BR> <BR> <B><I>Warning:</I></B> If this directive is empty, PHP will let the user call <B>any</B> function!',

	// variables_order
	'variables_order_short' => 'Set the order of the EGPCS variable parsing',
	'variables_order_full' => 'Specify the registration order for the GET, POST, Cookie, Environment and Server built-in variables (G, P, C, E, and S, respectivelyl; often referred to as EGPCS and sometimes as GPC). Registration is done from left to right, and newer values override the older ones.<BR> <BR> <B>Note:</B> The default value under PHP 4 is GPCS and under PHP 3 it is EGPCS. Under PHP 4, environment variables are <B>not</B> hashed into the array <I>$HTTP_ENV_VARS[]</I>, rather, you can access them by using the PHP function <I>getenve()</I>.',
	// text for options array
	'variables_order_environment' => 'Environment',

	// gpc_order
	'gpc_order_short' => 'GPC variables registration order',
	'gpc_order_full' => '<B>Note:</B> Using this directive is <B>not recommended</B>. Instead, use the more general directive <B><I>variables_order</I></B>.',

	// magic_quotes_gpc
	'magic_quotes_gpc_short' => 'Sets the magic_quotes state for GPC (Get/Post/Cookie) operations',
	'magic_quotes_gpc_full' => 'Enables/disables the Magic Quotes state for GPC (Get, Post, Cookie) operations. When this directive is enabled, all single quotes (\'), double quotes ("), backslashes (\), and NULs are automatically escaped with (preceded by) a backslash. If <I>magic_quotes_sybase</I> is also enabled, a single quote is escaped with a single quote instead of with a backslash. <BR> <B>Note:</B> The default value under PHP 4 is 0 and under PHP 3 it is 1. Under PHP 4, input data is no longer escaped with slashes, therefore it can be sent to SQL databases without further manipulation. Before sending data to other databases, call the PHP function <I>addslashes()</I> for each input element.',

	// magic_quotes_runtime
	'magic_quotes_runtime_short' => 'Magic Quotes for run-time generated data',
	'magic_quotes_runtime_full' => 'If this directive is enabled, most functions that return data from an external source, including databases (such as SQL), <I>exec()</I>, and text files, will have both single quotes (\') and double quotes (") escaped with (preceded by) a backslash (\). If <I>magic_quotes_sybase</I> is also enabled, a single quote is escaped with a single quote instead of with a backslash.',

	// magic_quotes_sybase
	'magic_quotes_sybase_short' => 'Magic Quotes are in Sybase-style',
	'magic_quotes_sybase_full' => 'Enables/disables the use of Sybase-style Magic Quotes: a single quote (\') is escaped with (preceded by) a single quote instead of with a backslash (\).<BR> <BR> <B>Note:</B> This directive is enabled <B>only</B> if <I>magic_quotes_gpc</I> or <I>magic_quotes_runtime</I> is also enabled.',

	// auto_prepend_file
	'auto_prepend_file_short' => 'Automatically prepend and parse a file to PHP',
	'auto_prepend_file_full' => 'Optionally defines the name of a file that is automatically parsed before the main PHP script file.<BR> <BR> <B>Note:</B> The file is included as if it were called by the PHP function </I>include()</I>, therefore the directive <I>include_path</I> is used and must be appropriately set.',

	// auto_append_file
	'auto_append_file_short' => 'Automatically append and parse a file to PHP',
	'auto_append_file_full' => 'Optionally defines the name of a file that is automatically parsed after the main PHP script file.<BR> <BR> <B>Note:</B> The file is included as if it were called by the PHP function </I>include()</I>, therefore the directive <I>include_path</I> is used and must be appropriately set.<BR> <BR> <B>Note:</B> The auto-append is <B>not implemented</B> if the PHP script file is terminated by the PHP function <I>exit()</I>.',

	// default_mimetype
	'default_mimetype_short' => 'Default MIME type',
	'default_mimetype_full' => 'Specifies the protocol to be used for defining file attachments for the World Wide Web. (MIME is the acronym of Multipurpose Internet Mail Extensions.)',

	// default_charset
	'default_charset_short' => 'Default character set',
	'default_charset_full' => 'As of version 4.0b4, PHP outputs a default character set in the Content-type: header. To disable this output, set this directive to be the empty string ("").',

	// display_errors
	'display_errors_short' => 'Display errors in HTML script output',
	'display_errors_full' => 'Specifies whether or not PHP prints errors as part of the HTML script output. <B><I>Warning:</I></B> For production web sites, we <B>strongly recommend</B> turning this feature <I>Off</I> and using error logging instead (see <I>log_errors</I>). Enabling <I>display_errors</I> on a production web site can <B>reveal security information to end users</B>, such as file paths on your Web server, your database schema, and other sensitive information.',

	// log_errors
	'log_errors_short' => 'Log errors to log file',
	'log_errors_full' => 'Specifies whether or not PHP logs errors to a log file (server-specific log, <I>stderr</I>, or <I>error_log</I>).<BR> <BR> <B><I>Warning:</I></B> For production web sites, we <B>strongly recommend</B> using error logging instead of displaying errors; see <I>display_errors</I>.',

	// track_errors
	'track_errors_short' => 'Store last error message',
	'track_errors_full' => 'Specifies whether or not PHP stores the last error/warning message in <I>$php_errormsg</I>.<BR> <BR> <B><I>Warning:</I></B> If you use the error-control operator prefix <I>@</I> when calling a PHP expression (which turns off error reporting for that particular expression), then we <B>strongly recommend</B> that you have the <I>track_errors</I> feature enabled. That way, if an error occurrs during the evaluation of that expression, you can find the error message in the global variable <I>$php_errormsg</I>. Currently, the error-control operator prefix <I>@</I> disables error reporting even for critical errors that terminate script execution. Among other consequences of this behavior is that if you use <I>@</I> to suppress errors from a certain function and either it is not available or it has been mistyped, then the script will "die" right there, and, unless the <I>track_errors</I> feature has been enabled, you have no indication as to why.',

	// warn_plus_overloading
	'warn_plus_overloading_short' => 'Output a warning if plus operator is used with strings',
	'warn_plus_overloading_full' => 'Specifies whether or not to instruct PHP to output a warning when the plus (+) operator is used with strings. The use of this warning simplifies finding scripts that should be rewritten to use the string concatenator (.) instead of the plus operator.',

	// display_startup_errors
	'display_startup_errors_short' => 'Display startup errors',
	'display_startup_errors_full' => 'Even when <i>display_error</i> is on, errors that occur during PHP\'s startup sequence are not displayed. It is strongly recommended to keep this option off, except for debugging purposes.',

	// error_reporting
	'error_reporting_short' => 'Set the error reporting level',
	'error_reporting_full' => 'Specifies the types of PHP errors to be reported. This directive is a bit field whose value is composed by ORing the values for the individual error types.<BR> <BR> <B>Note:</B> The PHP 4 default value is 2039, and PHP 3 default value is 7. The difference is due to the fact that <B>PHP 3 supports only</B> the first four error types: "fatal run-time errors", "run-time warnings", "compile-time parse errors", and "run-time notices." For both PHP 4 and PHP 3, the default is to report all PHP errors types that are supported, except for "run-time notices." (The "run-time notices" error type refers to warnings that often result from a bug in your code, but sometimes can also be intentional, for example, using an uninitialized variable and relying on the fact it is automatically initialized to an empty string.)<BR> <BR> <B>Note:</B> The error-reorting level can be changed in the Apache <I>httpd.conf</I> file by using the function <I>php_error_reporting</I> (<I>php3_error_reporting</I> for PHP 3), and it can be changed at run-time within a script by using the PHP function <I>error_reporting</I>.<BR> <BR> <B><I>Warning:</I></B> When you upgrade code or servers from PHP 3 to PHP 4, we <B>strongly recommend</B> that you check the error-reporting settings and all calls to <I>error_reporting()</I>. Otherwise, you may disable reporting of the new error types, especially "fatal compile-time errors", which can lead to empty documents with no feedback of what happened or where to look for the problem.<BR> <BR> <B><I>Warning:</I></B> If you use the error-control operator prefix <I>@</I> when calling a PHP expression (which turns off error reporting for that particular expression), then we <B>strongly recommend</B> that you have the <I>track_errors</I> feature enabled. That way, if an error occurrs during the evaluation of that expression, you can find the error message in the global variable <I>$php_errormsg</I>. Currently, the error-control operator prefix <I>@</I> disables error reporting even for critical errors that terminate script execution. Among other consequences of this behavior is that if you use <I>@</I> to suppress errors from a certain function and either it is not available or it has been mistyped, then the script will "die" right there, and, unless the <I>track_errors</I> feature has been enabled, you have no indication as to why.',

	// error_prepend_string
	'error_prepend_string_short' => 'String to output before an error message',
	'error_prepend_string_full' => 'Specifies the string PHP outputs before an error message.',

	// error_append_string
	'error_append_string_short' => 'String to output after an error message',
	'error_append_string_full' => 'Specifies the string PHP outputs after an error message.',

	// error_log
	'error_log_short' => 'Name of the file where script errors should be logged',
	'error_log_full' => 'Defines the file in which PHP errors should be logged. If the special value <I>syslog</I> is used, the errors are sent to the system logger. On UNIX this means syslog(3) and on Windows NT it means the Event Log. The system logger is not supported on Windows 95.',

	// highlight.string
	'highlight.string_short' => 'Highlighted string color',
	'highlight.string_full' => 'Specifies the color used for highlighting a string. You can supply a different value either in RGB format (for example, "#0008AA") or as a standard color name (such as RED, the color name is not case sensitive and should not be in quotes).',

	// highlight.comment
	'highlight.comment_short' => 'Highlighted comment color',
	'highlight.comment_full' => 'Specifies the color used for highlighting a comment. You can supply a different value either in RGB format (for example, "#0008AA") or as a standard color name (such as RED, the color name is not case sensitive and should not be in quotes).',

	// highlight.keyword
	'highlight.keyword_short' => 'Highlighted keyword color',
	'highlight.keyword_full' => 'Specifies the color used for highlighting a keyword. You can supply a different value either in RGB format (for example, "#0008AA") or as a standard color name (such as RED, the color name is not case sensitive and should not be in quotes).',

	// highlight.bg
	'highlight.bg_short' => 'Highlighted background color',
	'highlight.bg_full' => 'Specifies color used for highlighting a background. You can supply a different value either in RGB format (for example, "#0008AA") or as a standard color name (such as RED, the color name is not case sensitive and should not be in quotes).',

	// highlight.default
	'highlight.default_short' => 'Highlighted default color',
	'highlight.default_full' => 'Specifies the color used for highlighting a default. You can supply a different value either in RGB format (for example, "#0008AA") or as a standard color name (such as RED, the color name is not case sensitive and should not be in quotes).',

	// highlight.html
	'highlight.html_short' => 'Highlighted HTML color',
	'highlight.html_full' => 'Specifies the color used for highlighting html text. You can supply a different value either in RGB format (for example, "#0008AA") or as a standard color name (such as RED, the color name is not case sensitive and should not be in quotes).',

	// session.save_handler
	'session.save_handler_short' => 'Name of the handler which is used for storing and retrieving data associate',
	'session.save_handler_full' => 'Defines the name of the handler that is used for storing and retrieving data associated with a session. Defaults to "files".',

	// session.save_path
	'session.save_path_short' => 'Argument which is passed to the save handler',
	'session.save_path_full' => 'Defines the argument that is passed to the Save Handler. If you specify the default files handler, this is the path where the data files are created and stored. Defaults to "/tmp".',

	// session.use_cookies
	'session.use_cookies_short' => 'Using cookies to store the session id on the client side',
	'session.use_cookies_full' => 'Specifies whether or not the module will use cookies to store the session ID on the client side. Defaults to 1 (enabled).',

	// session.name
	'session.name_short' => 'Name of the session which is used as cookie name',
	'session.name_full' => 'Specifies the name of the session, which is also used as the cookie name. It should contain only alphanumeric characters. Defaults to "PHPSESSID".',

	// session.auto_start
	'session.auto_start_short' => 'Session auto start',
	'session.auto_start_full' => 'Specifies whether or not the session module starts a session automatically on request startup. Defaults to 0 (disabled).',

	// session.cookie_lifetime
	'session.cookie_lifetime_short' => 'Cookie lifetime',
	'session.cookie_lifetime_full' => 'Specifies the lifetime of the cookie, in seconds, that is sent to the browser. The value 0 means "until the browser is closed or restarted." Defaults to 0.',

	// session.cookie_path
	'session.cookie_path_short' => 'Path to set in session_cookie',
	'session.cookie_path_full' => 'Defines the path for which the cookie is valid (the path to set in <I>session_cookie</I>). Defaults to "/".',

	// session.cookie_domain
	'session.cookie_domain_short' => 'Domain to set in session_cookie',
	'session.cookie_domain_full' => 'Defines the domain for which the cookie is valid (the domain to set in <I>session_cookie</I>). Defaults to an empty string, that is, to no domain.',

	// session.cookie_httponly
	'session.cookie_httponly_short' => 'Access the cookie only through the HTTP protocol',
	'session.cookie_httponly_full' => 'Specifies whether or not the cookie will be accessible only through the HTTP protocol',
	
	// session.serialize_handler
	'session.serialize_handler_short' => 'Session handler for serialize/deserialize data',
	'session.serialize_handler_full' => 'Defines the name of the handler that is used to serialize/deserialize data. Currently, a PHP internal format (named php) and WDDX (named wddx) are supported. Defaults to "php".<BR> <BR> <B>Note:</B> WDDX is available <B>only</B> if PHP is compiled with WDDX support.',

	// session.gc_probability
	'session.gc_probability_short' => 'Garbage collection probability',
	'session.gc_probability_full' => 'Specifies the probability, in percent, that the routine <I>gc</I> (garbage collection) is started on each request or every session initialization. Defaults to 1.',

	// session.gc_maxlifetime
	'session.gc_maxlifetime_short' => 'Number of seconds after which data will be seen as garbage and cleaned up',
	'session.gc_maxlifetime_full' => 'Specifies the number of seconds that data can be stored, after which it will be seen as "garbage" and cleaned up.',

	// session.referer_check
	'session.referer_check_short' => 'Substring you want to check each HTTP Referer for',
	'session.referer_check_full' => 'Specifies the substring against which each HTTP Referrer is to be checked. If the Referrer was sent by the client and the substring was not found, the embedded session ID will be marked as invalid. Defaults to the empty string.',

	// session.entropy_length
	'session.entropy_length_short' => 'Number of bytes which will be read from the file specified above',
	'session.entropy_length_full' => 'Specifies the number of bytes that will be read from <I>entropy_file</I>. Defaults to 0 (disabled).',

	// session.entropy_file
	'session.entropy_file_short' => 'Path to an external resource using as an additional entropy source',
	'session.entropy_file_full' => 'Defines a path to an external resource (file) that will be used as an additional entropy source in the session ID creation process. Examples of resources that are found on many UNIX systems are <I>/dev/random</I> and <I>/dev/urandom</I>.',

	// session.cache_limiter
	'session.cache_limiter_short' => 'Cache control method to use for session pages',
	'session.cache_limiter_full' => 'Specifies the HTTP cache control method to use for session pages: nocache, private, or public. Defaults to "nocache."',
	// texts for options array
	'cache_limiter_nocache' => 'Nocache',
	'cache_limiter_private' => 'Private',
	'cache_limiter_public' => 'Public',

	// session.cache_expire
	'session.cache_expire_short' => 'Time-to-live for cached session pages in minutes',
	'session.cache_expire_full' => 'Specifies time-to-live, in minutes, for cached session pages. Defaults to 180.<BR> <BR> <B>Note:</B> This directive has no effect when the <I>cache_limiter</I> directive has the value "nocache."',

	// session.use_trans_sid
	'session.use_trans_sid_short' => 'Whether transparent sid support is enabled or not',
	'session.use_trans_sid_full' => 'Automatically pass session identifier among pages.',

	// assert.active
	'assert.active_short' => 'Enable assert() evaluation',
	'assert.active_full' => 'Activates/deactvates the PHP function <I>assert(<expression>)</I>.<BR> <BR> <B>Note:</B> The default value under PHP 4 is 0 and under PHP 3 it is 1.<BR> <BR> <B>Note:</B> Use assertion checking as a <B>debugging feature only</B>. That is, use it for "sanity-checks" that test for conditions that should always be true (and if not true indicate a programming error), or that check for the presence of certain features such as extension functions or of certain system limits and features. <B>Do not</B> use assertions for normal run-time operations such as checking input parameters. In general, your code should work correctly even if assertion checking is not activated.',

	// assert.warning
	'assert.warning_short' => 'Issue a PHP warning for each failed assertion',
	'assert.warning_full' => 'Specifies whether or not to have PHP issue a warning if an assertion fails.',

	// assert.bail
	'assert.bail_short' => 'Terminate execution if assertion fails',
	'assert.bail_full' => 'Specifies whether or not to have PHP terminate execution if an assertion fails.',

	// assert.quiet_eval
	'assert.quiet_eval_short' => 'Quiet evaluation (no error reporting) of assertions',
	'assert.quiet_eval_full' => 'Specifies whether or not to disable the PHP function <I>error_reporting()</I> when evaluating an assertion expression. If this directive is set to 0, then the assertion expression is evaluated with the current <I>error_reporting()</I>. If this directive is set to 1, then <I>error_reporting(0)</I> is used around the <I>eval()</I>.<BR> <BR> <B><I>Warning:</I></B> If this directive is enabled, then we <B>strongly recommend</B> that you have the <I>track_errors</I> feature enabled also. This way, if an error occurrs during the evaluation of an expression, you can find the error message in the global variable <I>$php_errormsg</I>. Otherwise, if error reporting has been suppressed and, say, a certain function is either not available or has been mistyped, the script will "die" right there, and, unless the <I>track_errors</I> feature has been enabled, you have no indication why.',

	// assert.callback
	'assert.callback_short' => 'Call user function if assertion fails',
	'assert.callback_full' => 'Specifies the user function that PHP calls if an assertion fails.',

	// define_syslog_variables
	'define_syslog_variables_short' => 'Define syslog variables',
	'define_syslog_variables_full' => 'Specifies whether or not to define the syslog variables, such as <I>$LOG_PID, $LOG_CRON</I>, etc. Performance is improved by setting this directive to 0. At run time you can always define the syslog variables by calling the PHP function <I>define_syslog_variables()</I>.',

	// SMTP
	'SMTP_short' => 'DNS name or IP address of the SMTP server for mail()',
	'SMTP_full' => 'Specifies, for PHP under Windows, the DNS name or IP address of the SMTP server that should be used for mail sent by the function <I>mail()</I>.<BR> <BR> <B>Note:</B> For sending mail under UNIX, see <I>sendmail_path</I>.',

	// sendmail_from
	'sendmail_from_short' => 'Mail address should be used in mail sent from PHP under Windows',
	'sendmail_from_full' => 'Specifies, for PHP under Windows, the "From:" mail address to be used for mail sent by the function <I>mail()</I>.<BR> <BR> <B>Note:</B> For sending mail under UNIX, see <I>sendmail_path</I>.',

	// sendmail_path
	'sendmail_path_short' => 'Where the sendmail program can be found',
	'sendmail_path_full' => 'Specifies, for PHP under UNIX, where the <I>sendmail</I> program can be found, usually <I>/usr/sbin/sendmail</I> or <I>/usr/lib/sendmail</I>. Although the <I>configure</I> program attempts to locate this path and set the default, however, if it fails, you can set the default here. For systems that do not use <I>sendmail</I>, set this directive to the <I>sendmail</I> wrapper/replacement, if any, that their mail system offers. For example, Qmail users can normally set it to <I>/var/qmail/bin/sendmail</I>.<BR> <BR> <B>Note:</B> Arguments can also be supplied; the default is <I>"sendmail -t -i"</I>.<BR> <BR> <B>Note:</B> For sending mail under Windows, see <I>sendmail_from</I> and <I>SMTP</I>.',

	// sql.safe_mode
	'sql.safe_mode_short' => 'SQL safe mode',
	'sql.safe_mode_full' => 'If the <I>SQL Safe Mode</I> option is enabled the MySQL and Ingres extensions will ignore the supplied host, user and password information and will use only the default ones.',

	// odbc.allow_persistent
	'odbc.allow_persistent_short' => 'Whether to allow persistent ODBC connections',
	'odbc.allow_persistent_full' => 'Specifies whether or not to allow persistent ODBC connections.',

	// odbc.check_persistent
	'odbc.check_persistent_short' => 'Check that a connection is still valid before reuse',
	'odbc.check_persistent_full' => 'Specifies whether or not to check for a valid connection before reusing a persistent OBDC connection.',

	// odbc.max_persistent
	'odbc.max_persistent_short' => 'The maximum number of persistent ODBC connections per process',
	'odbc.max_persistent_full' => 'Specifies the maximum number of persistent ODBC connections per process. -1 means no limit.',

	// odbc.max_links
	'odbc.max_links_short' => 'The maximum number of ODBC connections per process',
	'odbc.max_links_full' => 'Specifies the maximum number of all ODBC connections per process, including persistent connections. -1 means no limit.',

	// odbc.defaultlrl
	'odbc.defaultlrl_short' => 'Handling of ODBC LONG column data. Number of bytes returned to variables',
	'odbc.defaultlrl_full' => 'Specifies the handling of ODBC LONG column data. If this directive has a positive value, that value specifies the number of bytes to return to the PHP variables. If this directive is 0, then ODBC LONG column data is passed through to the client. See also the documentation for the PHP function <I>odbc_longreadlen</I>.<BR> <BR> <B>Note:</B> The value of this directive affects the behavior of the directive <I>uodbc.defaultbinmode</I>',

	// odbc.defaultbinmode
	'odbc.defaultbinmode_short' => 'Handling of binary data',
	'odbc.defaultbinmode_full' => 'Specifies the handling of ODBC binary column data, where the behavior of this directive is affected by the value of the directive <I>uodbc.defaultlrl</I>. If <I>uodbc.defaultlrl</I> has a positive value, then for this directive 0 means pass through data to client, 1 means data return as is, 2 means convert data to character. If <I>uodbc.defaultlrl</I> is 0, then for all values of this directive the data is returned as is. <B>Note:</B> For further <B>essential</B> details, see the documentation for the PHP function <I>odbc_binmode</I>.',
	// texts for options array
	'defaultbinmode_0' => 'passthru',
	'defaultbinmode_1' => 'return as is',
	'defaultbinmode_2' => 'convert to char',

	// pcre.backtrack_limit
	'pcre.backtrack_limit_short' => 'PCRE\'s backtracking limit',
	'pcre.backtrack_limit_full' => '',
	
	//pcre.recursion_limit
	'pcre.recursion_limit_short' => 'PCRE\'s recursion limit',
	'pcre.recursion_limit_full' => '',
	
	
	// mysql.allow_persistent
	'mysql.allow_persistent_short' => 'Whether to allow persistent connections to MySQL',
	'mysql.allow_persistent_full' => 'Specifies whether or not to allow persistent MySQL connections.',

	// mysql.max_persistent
	'mysql.max_persistent_short' => 'Maximum number of persistent MySQL connections',
	'mysql.max_persistent_full' => 'Specifies the maximum number of persistent MySQL connections per process. -1 means no limit.',

	// mysql.max_links
	'mysql.max_links_short' => 'The maximum number of MySQL connections per process',
	'mysql.max_links_full' => 'Specifies the maximum number of all MySQL connections per process, including persistent connections. -1 means no limit.',

	// mysql.default_port
	'mysql.default_port_short' => 'MySQL default port',
	'mysql.default_port_full' => 'Specifies the MySQL default port number for PHP function <I>mysql_connect()</I>. If this directive is not set, then under Windows <I>mysql_connect()</I> will use the compile-time defined <I>MYSQL_PORT</I>; and under UNIX it will use <I>$MYSQL_TCP_PORT</I>, or the entry <I>mysql-tcp</I> in <I>/etc/services</I>, or the compile-time defined </I>MYSQL_PORT</I>, in that order.',

	// mysql.default_socket
	'mysql.default_socket_short' => 'MySQL default socket',
	'mysql.default_socket_full' => 'Specifies the MySQL default socket name for doing local MySQL connections. If this directive is empty, the built-in MySQL default is used.',

	// mysql.default_host
	'mysql.default_host_short' => 'MySQL default host',
	'mysql.default_host_full' => 'Specifies the MySQL default host for the PHP function <I>mysql_connect()</I>. <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// mysql.default_user
	'mysql.default_user_short' => 'MySQL default user',
	'mysql.default_user_full' => 'Specifies the MySQL default user for the PHP function <I>mysql_connect()</I>. <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// mysql.default_password
	'mysql.default_password_short' => 'MySQL default password',
	'mysql.default_password_full' => 'Specifies the default password for <I>mysql_connect()</I>.<BR> <BR> <B>Note:</B> When PHP is in Safe Mode, this directive is not used.<BR> <BR> <B><I>Warning:</I></B> In general, <B>do not</B> store passwords in <I>php.ini</I>. <B>Any</B> user with PHP access can run <I>echo cfg_get_var("mysql.default_password")</I> and reveal the password; likewise, <B>any</B> user with read access to this file can reveal the password.',

	// msql.allow_persistent
	'msql.allow_persistent_short' => 'Allow persistent mSQL connections',
	'msql.allow_persistent_full' => 'Specifies whether or not to allow persistent mSQL connections.',

	// msql.max_persistent
	'msql.max_persistent_short' => 'Maximum number of persistent mSQL connections',
	'msql.max_persistent_full' => 'Specifies the maximum number of persistent mSQL connections per process. -1 means no limit.',

	// msql.max_links
	'msql.max_links_short' => 'Maximum number of all mSQL connections',
	'msql.max_links_full' => 'Specifies the maximum number of all mSQL connections per process, including persistent connections. -1 means no limit.',

	// mssql.allow_persistent
	'mssql.allow_persistent_short' => 'Allow persistent MSSQL connections',
	'mssql.allow_persistent_full' => 'Specifies whether or not to allow persistent MSSQL connections.',

	// mssql.max_persistent
	'mssql.max_persistent_short' => 'Maximum number of persistent MSSQL connections',
	'mssql.max_persistent_full' => 'Specifies the maximum number of persistent MSSQL connections per process. -1 means no limit.',

	// mssql.max_links
	'mssql.max_links_short' => 'Maximum number of all MSSQL connections',
	'mssql.max_links_full' => 'Specifies the maximum number of all MSSQL connections per process, including persistent connections. -1 means no limit.',

	// mssql.min_error_severity
	'mssql.min_error_severity_short' => 'Minimal error severity to display',
	'mssql.min_error_severity_full' => 'Specifies the minimum MSSQL error severity that PHP displays; errors having a severity that is lower than the value of this directive are not displayed.',

	// mssql.min_message_severity
	'mssql.min_message_severity_short' => 'Minimal message severity to display',
	'mssql.min_message_severity_full' => 'Specifies the minimum MSSQL message severity that PHP displays; messages having a severity that is lower than the value of this directive are not displayed.',

	// mssql.compatability_mode
	'mssql.compatability_mode_short' => 'MSSQL compatibility mode with PHP 3.0',
	'mssql.compatability_mode_full' => 'Specifies compatibility mode with the older versions of PHP 3.0. If this directive is on, it will cause PHP to automatically assign types to results according to their MSSQL type, instead of treating all results as strings.<BR> <BR> <B>Note:</B> This compatibility mode probably will not stay around forever, so try making the necessary changes to your code and turning off this directive.',

	// pgsql.allow_persistent
	'pgsql.allow_persistent_short' => 'Whether to allow persistent Postgres connections',
	'pgsql.allow_persistent_full' => 'Specifies whether or not to allow persistent PostgresSQL connections.',

	// pgsql.max_persistent
	'pgsql.max_persistent_short' => 'Maximum number of persistent PostgresSQL connections',
	'pgsql.max_persistent_full' => 'Specifies the maximum number of persistent PostgresSQL connections per process. -1 means no limit.',

	// pgsql.max_links
	'pgsql.max_links_short' => 'The maximum number of Postgres connections per process',
	'pgsql.max_links_full' => 'Specifies the maximum number of all PostgresSQL connections per process, including persistent connections. -1 means no limit.',

	// sybase.allow_persistent
	'sybase.allow_persistent_short' => 'Allow persistent Sybase connections',
	'sybase.allow_persistent_full' => 'Specifies whether or not to allow persistent Sybase connections.',

	// sybase.max_persistent
	'sybase.max_persistent_short' => 'Maximum number of persistent Sybase connections',
	'sybase.max_persistent_full' => 'Specifies the maximum number of persistent Sybase connections per process. -1 means no limit.',

	// sybase.max_links
	'sybase.max_links_short' => 'Maximum number of all Sybase connections',
	'sybase.max_links_full' => 'Specifies the maximum number of all Sybase connections per process, including persistent connections. -1 means no limit.',

	// sybase.interface_file
	'sybase.interface_file_short' => 'Sybase interface file',
	'sybase.interface_file_full' => 'Defines the Sybase interface file.',

	// sybase.min_error_severity
	'sybase.min_error_severity_short' => 'Sybase minimum error severity displayed',
	'sybase.min_error_severity_full' => 'Specifies the minimum Sybase error severity that PHP displays; errors having a severity that is lower than the value of this directive are not displayed.',

	// sybase.min_message_severity
	'sybase.min_message_severity_short' => 'Sybase minimaum message severity',
	'sybase.min_message_severity_full' => 'Specifies the minimum Sybase message severity that PHP displays; messages having a severity that is lower than the value of this directive are not displayed.',

	// sybase.compatability_mode
	'sybase.compatability_mode_short' => 'Sybase compatibility mode with PHP 3.0',
	'sybase.compatability_mode_full' => 'Specifies compatability mode with the older versions of PHP 3.0. If this directive is on, it will cause PHP to automatically assign types to results according to their Sybase type, instead of treating all results as strings.<BR> <BR> <B>Note:</B> This compatibility mode probably will not stay around forever, so try making the necessary changes to your code and turning off this directive.',

	// sybct.allow_persistent
	'sybct.allow_persistent_short' => 'Allow persistent Sybase-CT connections',
	'sybct.allow_persistent_full' => 'Specifies whether or not to allow persistent Sybase-CT connections.',

	// sybct.max_persistent
	'sybct.max_persistent_short' => 'Maximum number of persistent Sybase-CT connections',
	'sybct.max_persistent_full' => 'Specifies the maximum number of persistent Sybase-CT connections per process. -1 means no limit.',

	// sybct.max_links
	'sybct.max_links_short' => 'Maximum number of all Sybase-CT connections',
	'sybct.max_links_full' => 'Specifies the maximum number of all Sybase-CT connections per process, including persistent connections. -1 means no limit.',

	// sybct.min_server_severity
	'sybct.min_server_severity_short' => 'Sybase-CT minimum server message severity displayed',
	'sybct.min_server_severity_full' => 'Specifies the minimum Sybase-CT server message severity to display; server messages having a severity that is lower than the value of this directive are not displayed.',

	// sybct.min_client_severity
	'sybct.min_client_severity_short' => 'Sybase-CT minimum client message severity displayed',
	'sybct.min_client_severity_full' => 'Specifies the minimum Sybase-CT client message severity to display; client messages having a severity that is lower than the value of this directive are not displayed.',

	// bcmath.scale
	'bcmath.scale_short' => 'Number of digits after decimal point for bcmath functions',
	'bcmath.scale_full' => 'Specifies the number of decimal digits after the decimal point for the arbitray-precision bcmath functions. See also the PHP function <I>bcscale</I>.',

	// browscap
	'browscap_short' => 'Name of browser capabilities file',
	'browscap_full' => 'Defines the name of the browser capabilities file. <B>Note:</B> For a description of the settings in the browser capabilities file itself, see the PHP function <I>get_browser()</I>.',

	// ifx.default_host
	'ifx.default_host_short' => 'Informix default host',
	'ifx.default_host_full' => 'Defines the Informix default host to connect to if the default host is not defined in either <I>ifx_connect()</I> or <I>ifx_pconnect()</I>.<BR> <BR> <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// ifx.default_user
	'ifx.default_user_short' => 'default user',
	'ifx.default_user_full' => 'Defines the Informix default user ID to use if the default user ID is not defined in either <I>ifx_connect()</I> or <I>ifx_pconnect()</I>.<BR> <BR> <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// ifx.default_password
	'ifx.default_password_short' => 'default password',
	'ifx.default_password_full' => 'Defines the Informix default password to use if the default password is not defined in either <I>ifx_connect()</I> or <I>ifx_pconnect()</I>.<BR> <BR> <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// ifx.allow_persistent
	'ifx.allow_persistent_short' => 'Allow persistent Informix connections',
	'ifx.allow_persistent_full' => 'Specifies whether or not to allow persistent Informix connections.',

	// ifx.max_persistent
	'ifx.max_persistent_short' => 'Maximum number of persistent Informix connections',
	'ifx.max_persistent_full' => 'Specifies the maximum number of persistent Informix connections per process. -1 means no limit.',

	// ifx.max_links
	'ifx.max_links_short' => 'Maximum number of all Informix connections',
	'ifx.max_links_full' => 'Specifies the maximum number of all Informix connections per process, including persistent connections. -1 means no limit.',

	// ifx.textasvarchar
	'ifx.textasvarchar_short' => 'Informix TEXT column data handling',
	'ifx.textasvarchar_full' => 'Set this directive to <I>On</I> if you want to return Informix TEXT columns as normal strings in <I>select</I> statements, or to <I>False</I> if you want to use <I>blob id</I> parameters. You can override the setting of this directive at run time with the PHP function <I>ifx_textasvarchar()</I>.',

	// ifx.byteasvarchar
	'ifx.byteasvarchar_short' => 'Informix BYTE column data handling',
	'ifx.byteasvarchar_full' => 'Set this directive to <I>True</I> if you want to return Informix BYTE columns as normal strings in <I>select</I> statements, or to <I>False</I> if you want to use <I>blob id</I> parameters. You can override the setting of this directive at run time with the PHP function <I>ifx_byteasvarchar()</I>.',

	// ifx.charasvarchar
	'ifx.charasvarchar_short' => 'Informix CHAR column data handling',
	'ifx.charasvarchar_full' => 'Enables/disables trimming the trailing spaces from Informix CHAR columns when they are fetched.<BR> <BR> <B>Note:</B> Enabling this directive can be very helpful to Informix SE users.',

	// ifx.blobinfile
	'ifx.blobinfile_short' => 'Informix BLOB column data handling',
	'ifx.blobinfile_full' => 'Set this directive to <I>True</I> if you want to return Informix BLOB columns in a file, or to <I>False</I> if you want to keep them in memory. You can override the setting of this directive at run time with the PHP function <I>ifx_blobinfile_mode()</I>.',

	// ifx.nullformat
	'ifx.nullformat_short' => 'Informix NULL column data handling',
	'ifx.nullformat_full' => 'Set this directive to <I>True</I> if you want Informix NULL columns returned as the literal string "NULL", or to <I>False</I> if you want them returned as the empty string "". You can override the setting of this directive at run time with the PHP function <I>ifx_ nullformat()</I>.',

	// ingres.allow_persistent
	'ingres.allow_persistent_short' => 'Allow persistent Ingres II connections',
	'ingres.allow_persistent_full' => 'Specifies whether or not to allow persistent Ingres II connections.',

	// ingres.max_persistent
	'ingres.max_persistent_short' => 'Maximum number of persistent Ingres II connections',
	'ingres.max_persistent_full' => 'Specifies the maximum number of persistent Ingres II connections per process. -1 means no limit.',

	// ingres.max_links
	'ingres.max_links_short' => 'Maximum number of all Ingres II connections',
	'ingres.max_links_full' => 'Specifies the maximum number of all Ingres II connections per process, including persistent connections. -1 means no limit.',

	// ingres.default_database
	'ingres.default_database_short' => 'Ingres II default database',
	'ingres.default_database_full' => 'Defines the Ingres II default database, where the format is <I>[node_id::]dbname[/srv_class]</I>. <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// ingres.default_user
	'ingres.default_user_short' => 'Ingres II default user',
	'ingres.default_user_full' => 'Defines the Ingre II default user. <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// ingres.default_password
	'ingres.default_password_short' => 'Ingres II default password',
	'ingres.default_password_full' => 'Defines the Ingre II default password. <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// pfpro.defaulthost
	'pfpro.defaulthost_short' => 'Verisign Payflow Pro default host',
	'pfpro.defaulthost_full' => 'Defines the Verisign Payflow Pro default host PHP connects to, that is, the default Signio server.<BR> <BR> <B>Note:</B> For processing live transactions you <B>cannot</B> use the default value as it stands. One reasonable alternative is to change the default to be <I>connect.signio.com</I>.<BR> <BR> <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// pfpro.defaultport
	'pfpro.defaultport_short' => 'Verisign Payflow Pro default port',
	'pfpro.defaultport_full' => 'Defines the Verisign Payflow Pro default port PHP connects to. <B>Note:</B> When PHP is in Safe Mode, this directive is not used.',

	// pfpro.defaulttimeout
	'pfpro.defaulttimeout_short' => 'Verisign Payflow Pro default timeout',
	'pfpro.defaulttimeout_full' => 'Specifies the Verisign Payflow Pro default timeout in seconds.<BR> <BR> <B>Note:</B> The timeout countdown appears to begin only after a link to the processor has been established, therefore your script could possibly continue for a very long time in the event of DNS or network problems.',

	// pfpro.proxyaddress
	'pfpro.proxyaddress_short' => 'Verisign Payflow Pro proxy address',
	'pfpro.proxyaddress_full' => 'Defines the Verisign Payflow Pro default proxy IP address (if required).',

	// pfpro.proxyport
	'pfpro.proxyport_short' => 'Verisign Payflow Pro proxy port',
	'pfpro.proxyport_full' => 'Defines the Verisign Payflow Pro default proxy port.',

	// pfpro.proxylogon
	'pfpro.proxylogon_short' => 'Verisign Payflow Pro proxy log on',
	'pfpro.proxylogon_full' => 'Specifies the Verisign Payflow Pro default proxy log on.',

	// output_handler
	'output_handler_short' => 'Redirect all of the output of your scripts to a function',
	'output_handler_full' => '',

	// zlib.output_compression
	'zlib.output_compression_short' => 'Whether to transparently compress pages',
	'zlib.output_compression_full' => 'Transparent output compression using the zlib library Valid values for this option are \'off\', \'on\', or a specific buffer size to be used for compression',

	// zlib.output_handler
	'zlib.output_handler_short' => 'Zlib output handler',
	'zlib.output_handler_full' => '',

	// unserialize_callback_func
	'unserialize_callback_func_short' => 'Unserialize callback function',
	'unserialize_callback_func_full' => '',

	// serialize_precision
	'serialize_precision_short' => 'Store serialize_precision significant digits after the floating point',
	'serialize_precision_full' => '',

	// safe_mode_gid
	'safe_mode_gid_short' => 'Whether to enable PHP safe mode',
	'safe_mode_gid_full' => '',

	// safe_mode_include_dir
	'safe_mode_include_dir_short' => 'UID/GID checks are bypassed when including files from this directory and it',
	'safe_mode_include_dir_full' => '',

	// disable_classes
	'disable_classes_short' => 'This directive allows you to disable certain classes for security reasons',
	'disable_classes_full' => '',

	// max_input_time
	'max_input_time_short' => 'Maximum time in seconds a script is allowed to receive input data',
	'max_input_time_full' => 'This sets the maximum time in seconds a script is allowed to receive input data, like POST, GET and file uploads. The present default value is 60 seconds.',

	// log_errors_max_len
	'log_errors_max_len_short' => 'Set the maximum length of log_errors in bytes',
	'log_errors_max_len_full' => 'Set the maximum length of log_errors in bytes',

	// ignore_repeated_errors
	'ignore_repeated_errors_short' => 'Do not log repeated messages',
	'ignore_repeated_errors_full' => '',

	// ignore_repeated_source
	'ignore_repeated_source_short' => 'Ignore source of message when ignoring repeated messages',
	'ignore_repeated_source_full' => '',

	// report_memleaks
	'report_memleaks_short' => 'If this parameter is set to Off, then memory leaks will not be shown',
	'report_memleaks_full' => '',

	// register_long_arrays
	'register_long_arrays_short' => 'To register the deprecated long $HTTP_*_VARS type predefined variables',
	'register_long_arrays_full' => '',

	// allow_url_fopen
	'allow_url_fopen_short' => 'Enables the URL-aware fopen wrappers',
	'allow_url_fopen_full' => '',
	
	// allow_url_include
	'allow_url_include_short' => 'Whether to allow code execution through URL wrappers',
	'allow_url_include_full' => '',

	// default_socket_timeout
	'default_socket_timeout_short' => 'Default timeout (in seconds) for socket based streams',
	'default_socket_timeout_full' => 'Default timeout (in seconds) for socket based streams',

	// smtp_port
	'smtp_port_short' => 'Number of the port to connect to the server specified with the SMTP setting',
	'smtp_port_full' => '',

	// mysql.connect_timeout
	'mysql.connect_timeout_short' => 'Connect timeout in seconds',
	'mysql.connect_timeout_full' => '',

	// mysql.trace_mode
	'mysql.trace_mode_short' => 'Trace mode',
	'mysql.trace_mode_full' => '',

	// pgsql.auto_reset_persistent
	'pgsql.auto_reset_persistent_short' => 'Detect broken persistent links with pg_pconnect()',
	'pgsql.auto_reset_persistent_full' => '',

	// pgsql.ignore_notice
	'pgsql.ignore_notice_short' => 'Whether or not to log PostgreSQL backends notice messages',
	'pgsql.ignore_notice_full' => '',

	// pgsql.log_notice
	'pgsql.log_notice_short' => 'Whether or not to log PostgreSQL backends notice messages',
	'pgsql.log_notice_full' => '',

	// dbx.colnames_case
	'dbx.colnames_case_short' => 'Columns names',
	'dbx.colnames_case_full' => '',
	// texts for options array
	'colnames_case_unchanged' => 'Unchanged',
	'colnames_case_lowercase' => 'Lowercase',
	'colnames_case_uppercase' => 'Uppercase',

	// session.gc_divisor
	'session.gc_divisor_short' => 'Probability that the gc process is started on every session initialization',
	'session.gc_divisor_full' => '',

	// session.bug_compat_42
	'session.bug_compat_42_short' => 'Initializating of session variable in the global scope',
	'session.bug_compat_42_full' => '',

	// session.bug_compat_warn
	'session.bug_compat_warn_short' => 'Initializating a session variable in the global scope',
	'session.bug_compat_warn_full' => '',

	// session.hash_function
	'session.hash_function_short' => 'Specify the hash algorithm used to generate the session IDs',
	'session.hash_function_full' => '',

	// session.hash_bits_per_character
	'session.hash_bits_per_character_short' => 'Number of stored bits per character when converting binary hash data',
	'session.hash_bits_per_character_full' => '',

	// url_rewriter.tags
	'url_rewriter.tags_short' => 'HTML tags are rewritten to include session id',
	'url_rewriter.tags_full' => '',

	// mssql.secure_connection
	'mssql.secure_connection_short' => 'Use NT authentication when connecting to the server',
	'mssql.secure_connection_full' => '',

	// sockets.use_system_read
	'sockets.use_system_read_short' => 'Use the system read() function instead of the php_read() wrapper',
	'sockets.use_system_read_full' => '',

	// tidy.clean_output
	'tidy.clean_output_short' => 'Turns on/off the output repairing by Tidy',
	'tidy.clean_output_full' => '',

	// soap.wsdl_cache_enabled
	'soap.wsdl_cache_enabled_short' => 'Enables or disables WSDL caching feature',
	'soap.wsdl_cache_enabled_full' => '',

	// soap.wsdl_cache_dir
	'soap.wsdl_cache_dir_short' => 'Sets the directory name where SOAP extension will put cache files',
	'soap.wsdl_cache_dir_full' => '',

	// soap.wsdl_cache_ttl
	'soap.wsdl_cache_ttl_short' => 'Number of second while cached file will be used instead of original',
	'soap.wsdl_cache_ttl_full' => '',

	// always_populate_raw_post_data
	'always_populate_raw_post_data_short' => 'Always populate the $HTTP_RAW_POST_DATA variable',
	'always_populate_raw_post_data_full' => '',

	// html_errors
	'html_errors_short' => 'Turn off HTML tags in error messages',
	'html_errors_full' => '',

	// docref_root
	'docref_root_short' => 'The new error format contains a reference to a page describing the error',
	'docref_root_full' => '',

	// auto_detect_line_endings
	'auto_detect_line_endings_short' => 'Auto-detection of line endings',
	'auto_detect_line_endings_full' => '',

	// user_agent
	'user_agent_short' => 'Define the user agent for PHP to send',
	'user_agent_full' => '',

	// odbc.default_db
	'odbc.default_db_short' => 'ODBC data source to use if none is specified in odbc_connect() or odbc_pcon',
	'odbc.default_db_full' => '',

	// odbc.default_user
	'odbc.default_user_short' => 'User name to use if none is specified in odbc_connect() or odbc_pconnect()',
	'odbc.default_user_full' => '',

	// odbc.default_pw
	'odbc.default_pw_short' => 'Password to use if none is specified in odbc_connect() or odbc_pconnect()',
	'odbc.default_pw_full' => '',

	// session.use_only_cookies
	'session.use_only_cookies_short' => 'Using only cookies to store the session id on the client side',
	'session.use_only_cookies_full' => '',

	// session.cookie_secure
	'session.cookie_secure_short' => 'Whether cookies should only be sent over secure connections',
	'session.cookie_secure_full' => '',

	// tidy.default_config
	'tidy.default_config_short' => 'Default path for tidy config file',
	'tidy.default_config_full' => '',

	// zlib.output_compression_level
	'zlib.output_compression_level_short' => 'Compression level used for transparent output compression',
	'zlib.output_compression_level_full' => '',

	// java.class.path
	'java.class.path_short' => 'Name and path of the PHP jar file where PHP search for compiled Java classes',
	'java.class.path_full' => '',

	// java.home
	'java.home_short' => 'The root directory of the installed JDK',
	'java.home_full' => '',

	// java.library.path
	'java.library.path_short' => 'The location of the PHP java library (usually in the modules/directory)',
	'java.library.path_full' => '',

	// java.library
	'java.library_short' => 'The location of the Java virtual machine library',
	'java.library_full' => '',

	// com.allow_dcom
	'com.allow_dcom_short' => 'Operating PHP as a D-COM client',
	'com.allow_dcom_full' => '',

	// com.autoregister_typelib
	'com.autoregister_typelib_short' => 'Registration constants from the typelibrary of objects',
	'com.autoregister_typelib_full' => '',

	// com.autoregister_verbose
	'com.autoregister_verbose_short' => 'Reporting errors using the PHP error mechanism',
	'com.autoregister_verbose_full' => '',

	// com.autoregister_casesensitive
	'com.autoregister_casesensitive_short' => 'Constants found in auto-loaded type libraries will be registered case-s',
	'com.autoregister_casesensitive_full' => '',

	// com.code_page
	'com.code_page_short' => 'Default character sets code-page to use when passing strings to/from COM',
	'com.code_page_full' => '',

	// com.typelib_file
	'com.typelib_file_short' => 'Path to a file that contains a list of typelibraries',
	'com.typelib_file_full' => '',

	// zend.ze1_compatibility_mode
	'zend.ze1_compatibility_mode_short' => 'Enable compatibility mode with Zend Engine 1 (PHP 4)',
	'zend.ze1_compatibility_mode_full' => '',

	// arg_separator.input
	'arg_separator.input_short' => 'List of separator(s) used by PHP to parse input URLs into variables',
	'arg_separator.input_full' => '',

	// arg_separator.output
	'arg_separator.output_short' => 'The separator used in PHP generated URLs to separate arguments',
	'arg_separator.output_full' => '',

	// auto_globals_jit
	'auto_globals_jit_short' => 'Initializing auto-globals on the first use or at the start of the request',
	'auto_globals_jit_full' => '',

	// child_terminate
	'child_terminate_short' => 'Specify whether PHP scripts may request child process termination on end of',
	'child_terminate_full' => '',

	// date.default_latitude
	'date.default_latitude_short' => 'Default value for latitude parameter',
	'date.default_latitude_full' => '',

	// date.default_longitude
	'date.default_longitude_short' => 'Default value for longitude parameter',
	'date.default_longitude_full' => '',

	// date.sunrise_zenith
	'date.sunrise_zenith_short' => 'Default value for sunrise-zenith parameter',
	'date.sunrise_zenith_full' => '',

	// date.sunset_zenith
	'date.sunset_zenith_short' => 'Default value for sunset-zenith parameter',
	'date.sunset_zenith_full' => '',

	// date.timezone
	'date.timezone_short' => 'The default timezone used by all date/time functions if the TZ environment variable isn\'t set',
	'date.timezone_full' => '',

	// dba.default_handler
	'dba.default_handler_short' => 'DBA default handler',
	'dba.default_handler_full' => '',

	// docref_ext
	'docref_ext_short' => 'Extensions for document reference',
	'docref_ext_full' => '',

	// exif.decode_jis_intel
	'exif.decode_jis_intel_short' => 'Defines the image internal characterset for JIS encoded user comments',
	'exif.decode_jis_intel_full' => '',

	// exif.encode_unicode
	'exif.encode_unicode_short' => 'Defines the characterset UNICODE user comments are handled',
	'exif.encode_unicode_full' => '',

	// exif.decode_unicode_motorola
	'exif.decode_unicode_motorola_short' => 'Image internal characterset for Unicode encoded user comments',
	'exif.decode_unicode_motorola_full' => '',

	// exif.decode_unicode_intel
	'exif.decode_unicode_intel_short' => 'Image internal characterset for Unicode encoded user comments',
	'exif.decode_unicode_intel_full' => '',

	// exif.encode_jis
	'exif.encode_jis_short' => 'Characterset JIS user comments are handled',
	'exif.encode_jis_full' => '',

	// exif.decode_jis_motorola
	'exif.decode_jis_motorola_short' => 'Image internal characterset for JIS encoded user comments',
	'exif.decode_jis_motorola_full' => '',

	// fbsql.allow_persistent
	'fbsql.allow_persistent_short' => 'Allow persistent connection',
	'fbsql.allow_persistent_full' => '',

	// fbsql.allow_persistant
	'fbsql.allow_persistant_short' => 'Allow persistent connection',
	'fbsql.allow_persistant_full' => '',

	// fbsql.autocommit
	'fbsql.autocommit_short' => 'Enable or disable autocommit',
	'fbsql.autocommit_full' => '',

	// fbsql.batchSize
	'fbsql.batchSize_short' => '',
	'fbsql.batchSize_full' => '',

	// fbsql.mbatchSize
	'fbsql.mbatchSize_short' => '',
	'fbsql.mbatchSize_full' => '',

	// fbsql.default_database
	'fbsql.default_database_short' => 'FastBase default database',
	'fbsql.default_database_full' => '',

	// fbsql.default_database_password
	'fbsql.default_database_password_short' => 'FastBase default database password',
	'fbsql.default_database_password_full' => '',

	// fbsql.default_host
	'fbsql.default_host_short' => 'The default server host to use when connecting to the database server',
	'fbsql.default_host_full' => '',

	// fbsql.default_password
	'fbsql.default_password_short' => 'FastBase default password',
	'fbsql.default_password_full' => '',

	// fbsql.default_user
	'fbsql.default_user_short' => 'The default user name to use when connecting to the database server',
	'fbsql.default_user_full' => '',

	// fbsql.generate_warnings
	'fbsql.generate_warnings_short' => 'Enables a warning generating',
	'fbsql.generate_warnings_full' => '',

	// fbsql.max_connections
	'fbsql.max_connections_short' => 'Maximal number of fbsql connections',
	'fbsql.max_connections_full' => '',

	// fbsql.max_links
	'fbsql.max_links_short' => 'Maximal number of fbsql links',
	'fbsql.max_links_full' => '',

	// fbsql.max_persistent
	'fbsql.max_persistent_short' => 'Maximal number of fbsql persistent',
	'fbsql.max_persistent_full' => '',

	// fbsql.max_results
	'fbsql.max_results_short' => 'Maximal number of fbsql  results',
	'fbsql.max_results_full' => '',

	// ibase.allow_persistent
	'ibase.allow_persistent_short' => 'Whether to allow persistent connections to Firebird/InterBase',
	'ibase.allow_persistent_full' => '',

	// ibase.max_persistent
	'ibase.max_persistent_short' => 'The maximum number of persistent Firebird/InterBase connections per process',
	'ibase.max_persistent_full' => '',

	// ibase.max_links
	'ibase.max_links_short' => 'The maximum number of Firebird/InterBase connections per process',
	'ibase.max_links_full' => '',

	// ibase.default_db
	'ibase.default_db_short' => 'Default database to connect to when ibase_[p]connect() is called without db',
	'ibase.default_db_full' => '',

	// ibase.default_user
	'ibase.default_user_short' => 'Username to use when connecting to a database if no user name is specified',
	'ibase.default_user_full' => '',

	// ibase.default_password
	'ibase.default_password_short' => 'The password to use when connecting to a database if no password is specifi',
	'ibase.default_password_full' => '',

	// ibase.default_charset
	'ibase.default_charset_short' => 'The character set to use when connecting to a database if no character set',
	'ibase.default_charset_full' => '',

	// ibase.timestampformat
	'ibase.timestampformat_short' => 'Format for timestamp',
	'ibase.timestampformat_full' => '',

	// ibase.dateformat
	'ibase.dateformat_short' => 'Format for date',
	'ibase.dateformat_full' => '',

	// ibase.timeformat
	'ibase.timeformat_short' => 'Format for time',
	'ibase.timeformat_full' => '',

	// iconv.input_encoding
	'iconv.input_encoding_short' => '',
	'iconv.input_encoding_full' => '',

	// iconv.internal_encoding
	'iconv.internal_encoding_short' => '',
	'iconv.internal_encoding_full' => '',

	// iconv.output_encoding
	'iconv.output_encoding_short' => '',
	'iconv.output_encoding_full' => '',

	// ignore_user_abort
	'ignore_user_abort_short' => 'Wheter or not scripts are terminated after a client aborted their connection',
	'ignore_user_abort_full' => 'If false, scripts will be terminated as soon as they try to output something after a client has aborted their connection.',

	// ircg.control_user
	'ircg.control_user_short' => '',
	'ircg.control_user_full' => '',

	// ircg.keep_alive_interval
	'ircg.keep_alive_interval_short' => '',
	'ircg.keep_alive_interval_full' => '',

	// ircg.max_format_message_sets
	'ircg.max_format_message_sets_short' => '',
	'ircg.max_format_message_sets_full' => '',

	// ircg.shared_mem_size
	'ircg.shared_mem_size_short' => '',
	'ircg.shared_mem_size_full' => '',

	// ircg.work_dir
	'ircg.work_dir_short' => '',
	'ircg.work_dir_full' => '',

	// last_modified
	'last_modified_short' => 'Send PHP scripts modification date as Last-Modified',
	'last_modified_full' => '',

	// xbithack
	'xbithack_short' => 'Parse files with executable bit set as PHP regardless of their file ending',
	'xbithack_full' => '',

	// ldap.max_links
	'ldap.max_links_short' => '',
	'ldap.max_links_full' => '',

	// mail.force_extra_paramaters
	'mail.force_extra_paramaters_short' => 'Force the addition of the specified parameters to be passed as extra parameters to the sendmail binary',
	'mail.force_extra_paramaters_full' => '',

	// mail.force_extra_parameters
	'mail.force_extra_parameters_short' => 'Force the addition of the specified parameters to be passed as extra parameters to the sendmail binary',
	'mail.force_extra_parameters_full' => '',

	// mbstring.detect_order
	'mbstring.detect_order_short' => 'Defines default character code detection order',
	'mbstring.detect_order_full' => '',

	// mbstring.language
	'mbstring.language_short' => 'The default national language setting (NLS) used in mbstring',
	'mbstring.language_full' => '',

	// mbstring.encoding_translation
	'mbstring.encoding_translation_short' => 'Enables the transparent character encoding filter for the HTTP queries',
	'mbstring.encoding_translation_full' => '',

	// mbstring.internal_encoding
	'mbstring.internal_encoding_short' => 'Defines the default internal character encoding',
	'mbstring.internal_encoding_full' => '',

	// mbstring.http_input
	'mbstring.http_input_short' => 'Defines the default HTTP input character encoding',
	'mbstring.http_input_full' => '',

	// mbstring.http_output
	'mbstring.http_output_short' => 'Defines the default HTTP output character encoding',
	'mbstring.http_output_full' => '',

	// mbstring.substitute_character
	'mbstring.substitute_character_short' => 'Defines character to substitute for invalid character encoding',
	'mbstring.substitute_character_full' => '',

	// mbstring.func_overload
	'mbstring.func_overload_short' => 'Overloads a set of single byte functions by the mbstring counterparts',
	'mbstring.func_overload_full' => '',
	// texts for options array
	'func_overload_0' => 'No overload',
	'func_overload_1' => 'Overload mail()',
	'func_overload_2' => 'Overload str*()',
	'func_overload_3' => 'Overload mail() and str*()',
	'func_overload_4' => 'Overload ereg*()',
	'func_overload_5' => 'Overload mail() and ereg*()',
	'func_overload_6' => 'Overload str*() and ereg*()',
	'func_overload_7' => 'Overload everything',

	// mcrypt.algorithms_dir
	'mcrypt.algorithms_dir_short' => 'Location of algorithms modules',
	'mcrypt.algorithms_dir_full' => '',

	// mcrypt.modes_dir
	'mcrypt.modes_dir_short' => 'Location of modes modules',
	'mcrypt.modes_dir_full' => '',

	// mime_magic.debug
	'mime_magic.debug_short' => 'Enable/disable debugging',
	'mime_magic.debug_full' => '',

	// mime_magic.magicfile
	'mime_magic.magicfile_short' => ' The path to the magic.mime file',
	'mime_magic.magicfile_full' => '',

	// mssql.batchsize
	'mssql.batchsize_short' => 'Limits the number of records in each batch',
	'mssql.batchsize_full' => '',

	// mssql.connect_timeout
	'mssql.connect_timeout_short' => 'Connect timeout',
	'mssql.connect_timeout_full' => '',

	// mssql.datetimeconvert
	'mssql.datetimeconvert_short' => 'Specify how datetime and datetim4 columns are returned',
	'mssql.datetimeconvert_full' => '',

	// mssql.max_procs
	'mssql.max_procs_short' => 'Specify max number of processes',
	'mssql.max_procs_full' => '',

	// mssql.textlimit
	'mssql.textlimit_short' => '',
	'mssql.textlimit_full' => '',

	// mssql.timeout
	'mssql.timeout_short' => 'Query timeout',
	'mssql.timeout_full' => '',

	// mysqli.max_links
	'mysqli.max_links_short' => 'The maximum number of MySQL connections per process',
	'mysqli.max_links_full' => '',

	// mysqli.default_port
	'mysqli.default_port_short' => 'Default TCP port number to use when connecting to the database server',
	'mysqli.default_port_full' => '',

	// mysqli.default_socket
	'mysqli.default_socket_short' => 'The default socket name to use when connecting to a local database server',
	'mysqli.default_socket_full' => '',

	// mysqli.default_host
	'mysqli.default_host_short' => 'The default server host to use when connecting to the database server',
	'mysqli.default_host_full' => '',

	// mysqli.default_user
	'mysqli.default_user_short' => 'The default user name to use when connecting to the database server',
	'mysqli.default_user_full' => '',

	// mysqli.default_pw
	'mysqli.default_pw_short' => 'The default password to use when connecting to the database server',
	'mysqli.default_pw_full' => '',

	// mysqli.default_password
	'mysqli.default_password_short' => 'The default password to use when connecting to the database server',
	'mysqli.default_password_full' => '',

	// mysqli.reconnect
	'mysqli.reconnect_short' => 'Enable/disable automatic reconnection',
	'mysqli.reconnect_full' => '',

	// nsapi.read_timeout
	'nsapi.read_timeout_short' => 'Sets the time in seconds the plugin is waiting for POST data from the client',
	'nsapi.read_timeout_full' => '',

	// open_basedir
	'open_basedir_short' => 'Limit the files that can be opened by PHP to the specified directory-tree',
	'open_basedir_full' => '',

	// pfpro.proxypassword
	'pfpro.proxypassword_short' => 'Default proxy password',
	'pfpro.proxypassword_full' => '',

	// report_zend_debug
	'report_zend_debug_short' => '',
	'report_zend_debug_full' => '',

	// sqlite.assoc_case
	'sqlite.assoc_case_short' => 'Whether the names of the columns are returned in their natural case or as uppercase or lowercase indexes',
	'sqlite.assoc_case_full' => '',
	// texts for options array
	'assoc_case_0' => 'Mixed case',
	'assoc_case_1' => 'Upper case',
	'assoc_case_2' => 'Lower case',

	// sybct.login_timeout
	'sybct.login_timeout_short' => 'The maximum time in seconds to wait for a connection attempt to succeed before returning failure',
	'sybct.login_timeout_full' => '',

	// sybct.hostname
	'sybct.hostname_short' => 'The name of the host you claim to be connecting from, for display by sp_who',
	'sybct.hostname_full' => '',

	// sybct.deadlock_retry_count
	'sybct.deadlock_retry_count_short' => 'Allows you to to define how often deadlocks are to be retried',
	'sybct.deadlock_retry_count_full' => '',

	// xmlrpc_errors
	'xmlrpc_errors_short' => '',
	'xmlrpc_errors_full' => '',

	// xmlrpc_error_number
	'xmlrpc_error_number_short' => '',
	'xmlrpc_error_number_full' => '',

	// cgi.force_redirect
	'cgi.force_redirect_short' => 'Provides security running PHP as a CGI under',
	'cgi.force_redirect_full' => '',

	// cgi.nph
	'cgi.nph_short' => 'Forces cgi to always sent Status: 200 with every request',
	'cgi.nph_full' => '',

	// cgi.redirect_status_env
	'cgi.redirect_status_env_short' => 'Accorging to this status PHP knows it is OK to continue execution',
	'cgi.redirect_status_env_full' => '',

	// cgi.fix_pathinfo
	'cgi.fix_pathinfo_short' => 'PATH_INFO/PATH_TRANSLATED support for CGI',
	'cgi.fix_pathinfo_full' => '',

	// fastcgi.impersonate
	'fastcgi.impersonate_short' => 'Ability to impersonate security tokens of the calling client',
	'fastcgi.impersonate_full' => '',

	// cgi.rfc2616_headers
	'cgi.rfc2616_headers_short' => 'Type of headers to use when sending HTTP response code',
	'cgi.rfc2616_headers_full' => '',

	// from
	'from_short' => 'Define the anonymous ftp password',
	'from_full' => '',

	// mssql.textsize
	'mssql.textsize_short' => 'Maximum returnable length of a TEXT column',
	'mssql.textsize_full' => '',

	// printer.default_printer
	'printer.default_printer_short' => 'Defines a default printer',
	'printer.default_printer_full' => '',

	// crack.default_dictionary
	'crack.default_dictionary_short' => 'Modify the directory location of the cracklib  dictionary files',
	'crack.default_dictionary_full' => '',

/************************************************
 * strings that confDerectivesZEND uses: short and full descriptions
 ************************************************/
	
	// file directives description:
	// zds.enable
	'zend_cache.ini_short' => 'Content Cache Conditions file',
	'zend_cache.ini_full' => '',
	
	'zend_cache_url.ini_short' => 'URL Content Cache Conditions file',
	'zend_cache_url.ini_full' => '',
	
	// zds.enable
	'compress_blacklist.ZendAccelerator.txt_short' => 'Compression Blacklist file',
	'compress_blacklist.ZendAccelerator.txt_full' => '',
	
	// zds.enable
	'user_blacklist.ZendAccelerator.txt_short' => 'Acceleration Blacklist file',
	'user_blacklist.ZendAccelerator.txt_full' => '',

	// zds.enable
	'zds.enable_short' => 'Enable Download Server',
	'zds.enable_full' => '',

	// zds.disable_byterange
	'zds.disable_byterange_short' => 'Enable/disable handling byte-range requests (all requests would return entire file)',
	'zds.disable_byterange_full' => '',

	// zds.install_dir
	'zds.install_dir_short' => 'Download Server installation directory',
	'zds.install_dir_full' => '',

	// zds.mime_types_file
	'zds.mime_types_file_short' => 'MIME types file for ZDS server',
	'zds.mime_types_file_full' => 'The name of the file that contains the list of extensions recognized by the ZDS server as files to be served and their respective MIME types. Format of the file is',

	// zend.license_path
	'zend.license_path_short' => 'Path where licensed Zend products should look for the product license',
	'zend.license_path_full' => 'Colon (on windows - semicolon) separated list of the directories',

	// zend.javamw.threads
	'zend.javamw.threads_short' => 'Amount of Java server threads',
	'zend.javamw.threads_full' => 'How many worker threads the server is using, allowing this much concurrent requests to be executed ',

	// zend.javamw.port
	'zend.javamw.port_short' => 'TCP port on which the server is listening',
	'zend.javamw.port_full' => 'TCP port on which the server is listening ',

	// java.ints_are_longs
	'java.ints_are_longs_short' => 'Convert integer of PHP to java.lang.Long of Java',
	'java.ints_are_longs_full' => 'Translate PHP integer values to java.lang.Long integers (64-bit) instead of 
java.lang.Integer integers (32-bit). Default is off',

	// java.server_port
	'java.server_port_short' => 'TCP port on which the server is listening',
	'java.server_port_full' => 'Default is 10001. Must be the same as zend.javamw.port for the server',

	// zend_extension_manager.download_server
	'zend_extension_manager.download_server_short' => 'Path to the ZDS binaries directory',
	'zend_extension_manager.download_server_full' => 'Shows the place where the Extension Manager would find the ZDS binaries.',

	// zend_extension_manager.download_server_ts
	'zend_extension_manager.download_server_ts_short' => 'Path to the ZDS binaries directory, thread safe version',
	'zend_extension_manager.download_server_ts_full' => 'Shows the place where the Extension Manager would find the ZDS binaries, thread safe version.',

	// zend_extension_manager.java_bridge
	'zend_extension_manager.java_bridge_short' => 'Path to the Java Bridge binaries directory',
	'zend_extension_manager.java_bridge_full' => 'Shows the place where the Extension Manager would find the Java Bridge binaries.',

	// zend_extension_manager.java_bridge_ts
	'zend_extension_manager.java_bridge_ts_short' => 'Path to the Java Bridge binaries directory, thread safe version',
	'zend_extension_manager.java_bridge_ts_full' => 'Shows the place where the Extension Manager would find the Java Bridge binaries, thread safe version.',

	// zend_extension_manager.optimizer
	'zend_extension_manager.optimizer_short' => 'Path to the Optimizer binaries directory',
	'zend_extension_manager.optimizer_full' => 'Shows the place where the Extension Manager would find the Optimizer binaries.',

	// zend_extension_manager.optimizer_ts
	'zend_extension_manager.optimizer_ts_short' => 'Path to the Optimizer binaries directory, thread safe version',
	'zend_extension_manager.optimizer_ts_full' => 'Shows the place where the Extension Manager would find the Optimizer binaries, thread safe version.',

	// zend_extension_manager.platform
	'zend_extension_manager.platform_short' => 'Path to the Platform binaries directory',
	'zend_extension_manager.platform_full' => 'Shows the place where the Extension Manager would find the Platform binaries.',

	// zend_extension_manager.platform_ts
	'zend_extension_manager.platform_ts_short' => 'Path to the Platform binaries directory, thread safe version',
	'zend_extension_manager.platform_ts_full' => 'Shows the place where the Extension Manager would find the Platform binaries, thread safe version.',

	// zend_extension_manager.performance_suite
	'zend_extension_manager.performance_suite_short' => 'Path to the ZPS binaries directory',
	'zend_extension_manager.performance_suite_full' => 'Shows the place where the Extension Manager would find the ZPS binaries.',

	// zend_extension_manager.performance_suite_ts
	'zend_extension_manager.performance_suite_ts_short' => 'Path to the ZPS binaries directory, thread safe version',
	'zend_extension_manager.performance_suite_ts_full' => 'Shows the place where the Extension Manager would find the ZPS binaries, thread safe version.',

	// zend_extension_manager.sqlite
	'zend_extension_manager.sqlite_short' => 'Path to the SQLite extension binaries directory',
	'zend_extension_manager.sqlite_full' => 'Shows the place where the Extension Manager would find the SQLite extension binaries.',

	// zend_extension_manager.sqlite_ts
	'zend_extension_manager.sqlite_ts_short' => 'Path to the SQLite extension binaries directory, thread safe version',
	'zend_extension_manager.sqlite_ts_full' => 'Shows the place where the Extension Manager would find the SQLite extension binaries, thread safe version.',

	// zend_extension_manager.gd
	'zend_extension_manager.gd_short' => 'Path to the GD extension binaries directory',
	'zend_extension_manager.gd_full' => 'Shows the place where the Extension Manager would find the GD extension binaries.',

	// zend_extension_manager.gd_ts
	'zend_extension_manager.gd_ts_short' => 'Path to the GD extension binaries directory, thread safe version',
	'zend_extension_manager.gd_ts_full' => 'Shows the place where the Extension Manager would find the GD extension binaries, thread safe version.',

	// zend_extension_manager.mysql
	'zend_extension_manager.mysql_short' => 'Path to the MySQL extension binaries directory',
	'zend_extension_manager.mysql_full' => 'Shows the place where the Extension Manager would find the MySQL extension binaries.',

	// zend_extension_manager.mysql_ts
	'zend_extension_manager.mysql_ts_short' => 'Path to the MySQL extension binaries directory, thread safe version',
	'zend_extension_manager.mysql_ts_full' => 'Shows the place where the Extension Manager would find the MySQL extension binaries, thread safe version.',

	// zend_extension_manager.debug_server
	'zend_extension_manager.debug_server_short' => 'Path to the Debugger binaries directory',
	'zend_extension_manager.debug_server_full' => 'Shows the place where the Extension Manager would find the Debugger binaries.',

	// zend_extension_manager.debug_server_ts
	'zend_extension_manager.debug_server_ts_short' => 'Path to the Debugger binaries directory, thread safe version',
	'zend_extension_manager.debug_server_ts_full' => 'Shows the place where the Extension Manager would find the Debugger binaries, thread safe version.',

	// zend_monitor.max_var_len
	'zend_monitor.max_var_len_short' => 'Maxmimum variable length for collected data in POST,SERVER and SESSION. Limit applies to each single value',
	'zend_monitor.max_var_len_full' => '',

	// zend_monitor.disable_script_runtime_after_function_runtime
	'zend_monitor.disable_script_runtime_after_function_runtime_short' => 'Ignore long script runtime reporting when long function runtime event occured',
	'zend_monitor.disable_script_runtime_after_function_runtime_full' => '',

	// zend_monitor.max_script_runtime_load_cutoff
	'zend_monitor.max_script_runtime_load_cutoff_short' => 'Above this load average, the slow script runtime events will be ignored (use 0 for always report slow script events)',
	'zend_monitor.max_script_runtime_load_cutoff_full' => '',

	// zend_monitor.tmp_dir
	'zend_monitor.tmp_dir_short' => 'Directory where platform temp files are written',
	'zend_monitor.tmp_dir_full' => '',

	// zend_monitor.mem_threshold
	'zend_monitor.mem_threshold_short' => 'Minimal used memory for which deviations from average would be reported',
	'zend_monitor.mem_threshold_full' => '',

	// zend_monitor.output_threshold
	'zend_monitor.output_threshold_short' => 'Minimal output size for which deviations from average would be reported',
	'zend_monitor.output_threshold_full' => '',

	// zend_monitor.rotate_freq
	'zend_monitor.rotate_freq_short' => 'Internal use, do not change it without guidance',
	'zend_monitor.rotate_freq_full' => '',

	// zend_monitor.time_threshold
	'zend_monitor.time_threshold_short' => 'Minimal execution time, for which deviations from average would be reported',
	'zend_monitor.time_threshold_full' => '',

	// zend_monitor.max_output_dev.severe
	'zend_monitor.max_output_dev.severe_short' => 'Output size deviation from average to trigger severe event',
	'zend_monitor.max_output_dev.severe_full' => '',

	// zend_gui_password
	'zend_gui_password_short' => 'Encrypted password used by Zend GUI applications',
	'zend_gui_password_full' => '',

	// zend_gui_password.zend_com
	'zend_gui_password.zend_com_short' => 'Internal usage for GUI applications',
	'zend_gui_password.zend_com_full' => '',

	// zps.install_dir
	'zps.install_dir_short' => 'Zend GUI applications installation directory',
	'zps.install_dir_full' => '',

	// studio.install_dir
	'studio.install_dir_short' => 'Zend Studio Server installation directory',
	'studio.install_dir_full' => '',

	// zps.language
	'zps.language_short' => 'Zend Performance Suite GUI language code',
	'zps.language_full' => '',

	// zend_accelerator.allow_noshm
	'zend_accelerator.allow_noshm_short' => 'Allows running Platform module without shared memory',
	'zend_accelerator.allow_noshm_full' => '',
	
	// zend_accelerator.output_cache_dir
	'zend_accelerator.output_cache_dir_short' => 'Directory where Content Cache files will be stored',
	'zend_accelerator.output_cache_dir_full' => '',

	// zend_accelerator.output_cache_config
	'zend_accelerator.output_cache_config_short' => 'Configuration file name for Content Cache',
	'zend_accelerator.output_cache_config_full' => '',

	// zend_accelerator.output_cache_config
	'zend_accelerator.output_cache_url_config_short' => 'Configuration file name for Content Cache URL',
	'zend_accelerator.output_cache_url_config_full' => '',

	// zend_accelerator.output_cache_enabled
	'zend_accelerator.output_cache_enabled_short' => 'Enable Content Cache',
	'zend_accelerator.output_cache_enabled_full' => '',

	// zend_accelerator.compression
	'zend_accelerator.compression_short' => 'Compress files cached by the Content Cache',
	'zend_accelerator.compression_full' => '',

	// zend_accelerator.compress_all
	'zend_accelerator.compress_all_short' => 'Compress all output when possible',
	'zend_accelerator.compress_all_full' => '',

	// zend_accelerator.httpd_uid
	'zend_accelerator.httpd_uid_short' => 'User ID of the httpd process',
	'zend_accelerator.httpd_uid_full' => '',

	// zend_debugger.httpd_uid
	'zend_debugger.httpd_uid_short' => 'User ID of the httpd process',
	'zend_debugger.httpd_uid_full' => '',

	// zend_debugger.allow_tunnel
	'zend_debugger.allow_tunnel_short' => 'List of remote hosts that will be allowed to use tunneling',
	'zend_debugger.allow_tunnel_full' => '',

	// zend_accelerator.max_cached_filesize
	'zend_accelerator.max_cached_filesize_short' => 'Maximal amount of data cached by the Content Cache',
	'zend_accelerator.max_cached_filesize_full' => '',

	// zend_accelerator.user_blacklist_filename
	'zend_accelerator.user_blacklist_filename_short' => 'Filename containing list of files not to be accelerated',
	'zend_accelerator.user_blacklist_filename_full' => '',
	
	// zend_accelerator.mmap_base_file
	'zend_accelerator.mmap_base_file_short' => 'Windows: location of mmap address file',
	'zend_accelerator.mmap_base_file_full' => '',

	// zend_accelerator.validate_timestamps
	'zend_accelerator.validate_timestamps_short' => 'Check accelerated files for modification',
	'zend_accelerator.validate_timestamps_full' => '',

	// zend_accelerator.use_cwd
	'zend_accelerator.use_cwd_short' => 'Use current directory in accelerated file\'s identification',
	'zend_accelerator.use_cwd_full' => '',

	// zend_optimizer.enable_loader
	'zend_optimizer.enable_loader_short' => 'Enable loading encoded scripts',
	'zend_optimizer.enable_loader_full' => '',

	// zend_optimizer.optimization_level
	'zend_optimizer.optimization_level_short' => 'Enabled optimizations bitmask',
	'zend_optimizer.optimization_level_full' => '',

	// zend_optimizer.obfuscation_level_support
	'zend_optimizer.obfuscation_level_support_short' =>'Run-time support level for obfuscation',
	'zend_optimizer.obfuscation_level_support_full' => '',
	
	// zend_accelerator.max_accelerated_files
	'zend_accelerator.max_accelerated_files_short' => 'Number of the files that can be accelerated',
	'zend_accelerator.max_accelerated_files_full' => '',

	// zend_accelerator.max_wasted_percentage
	'zend_accelerator.max_wasted_percentage_short' => 'Maximal amount of memory to waste on old files\' data',
	'zend_accelerator.max_wasted_percentage_full' => '',

	// zend_accelerator.memory_consumption
	'zend_accelerator.memory_consumption_short' => 'Accelerator memory size',
	'zend_accelerator.memory_consumption_full' => '',

	// zend_accelerator.perform_timings
	'zend_accelerator.perform_timings_short' => 'Calculate Accelerator performance statistics',
	'zend_accelerator.perform_timings_full' => '',

	// zend_accelerator.max_cache_size
	'zend_accelerator.max_cache_size_short' => 'Maximal amount of diskspace to be occupied by Content Cache',
	'zend_accelerator.max_cache_size_full' => '',

	// zend_accelerator.min_free_disk
	'zend_accelerator.min_free_disk_short' => 'Minimal amount of free disk space to be preserved by Content Cache',
	'zend_accelerator.min_free_disk_full' => '',

	// zend_accelerator.cache_cleaner_freq
	'zend_accelerator.cache_cleaner_freq_short' => 'Frequency of Content Cache cleaner passes',
	'zend_accelerator.cache_cleaner_freq_full' => '',

	// zend_accelerator.compress_blacklist_filename
	'zend_accelerator.compress_blacklist_filename_short' => 'List of the scripts that shouldn\'t have their output compressed',
	'zend_accelerator.compress_blacklist_filename_full' => '',

	// zend_accelerator.php_extensions
	'zend_accelerator.php_extensions_short' => 'List of the possible extensions processed by PHP engine',
	'zend_accelerator.php_extensions_full' => '',

	// zend_accelerator.enabled
	'zend_accelerator.enabled_short' => 'Enable Accelerator',
	'zend_accelerator.enabled_full' => '',

	// zend_debugger.expose_remotely
	'zend_debugger.expose_remotely_short' => 'When Debugger presense should be exposed to the remote host',
	'zend_debugger.expose_remotely_full' => '',
	// texts for options array
	'expose_remotely_always' => 'Always',
	'expose_remotely_allowed_hosts' => 'Allowed Hosts',
	'expose_remotely_never' => 'Never',

	// zend_debugger.licensed_user
	'zend_debugger.licensed_user_short' => 'License user',
	'zend_debugger.licensed_user_full' => '',

	// zend_debugger.license_key
	'zend_debugger.license_key_short' => 'License key',
	'zend_debugger.license_key_full' => '',

	// zend_ini_modifier
	'zend_ini_modifier_short' => 'Path to the INI modifier utility',
	'zend_ini_modifier_full' => '',

	// zend_gui.language
	'zend_gui.language_short' => 'Zend GUI applications language code',
	'zend_gui.language_full' => '',

	// zend_gui.language_charset
	'zend_gui.language_charset_short' => 'Zend GUI applications language meta charset',
	'zend_gui.language_charset_full' => '',

	// zend_gui.ini_modifier
	'zend_gui.ini_modifier_short' => 'Path to the INI modifier utility',
	'zend_gui.ini_modifier_full' => '',

	// zend_debugger.allow_hosts
	'zend_debugger.allow_hosts_short' => 'List of hosts allowed to debug',
	'zend_debugger.allow_hosts_full' => '',

	// zend_debugger.deny_hosts
	'zend_debugger.deny_hosts_short' => 'List of hosts not allowed to debug',
	'zend_debugger.deny_hosts_full' => '',

	// zend_server.allow_hosts
	'zend_server.allow_hosts_short' => 'List of hosts allowed to access the Server Center',
	'zend_server.allow_hosts_full' => '',

	// zend_server.deny_hosts
	'zend_server.deny_hosts_short' => 'List of hosts not allowed to access the Server Center',
	'zend_server.deny_hosts_full' => '',

	// zend_root_dir
	'zend_root_dir_short' => 'Studio Server installation directory',
	'zend_root_dir_full' => '',

	// zend_server.apache_error_log
	'zend_server.apache_error_log_short' => 'Path to the Apache error log file',
	'zend_server.apache_error_log_full' => '',

	// zend_language
	'zend_language_short' => 'Language used by the Server Center',
	'zend_language_full' => '',

	// zds.mmap_chunk
	'zds.mmap_chunk_short' => 'Defines in how big chunks (in K) ZDS would map files. Default is 256',
	'zds.mmap_chunk_full' => '',

	// zds.nice
	'zds.nice_short' => 'Defines priority - of ZDS process. Default is 10',
	'zds.nice_full' => '',

	// zds.poll_delay
	'zds.poll_delay_short' => 'Sets if there is small delay in event loop to save processor time. Default is 0',
	'zds.poll_delay_full' => '',

	// zds.min_file_size
	'zds.min_file_size_short' => 'Minimal file size to be served via ZDS',
	'zds.min_file_size_full' => '',

	// zds.log_file
	'zds.log_file_short' => 'Download Server logfile',
	'zds.log_file_full' => '',

	// zds.your_servers_max_clients
	'zds.your_servers_max_clients_short' => 'Number of the server MaxClients, used by the GUI when testing the Download Server',
	'zds.your_servers_max_clients_full' => '',

	// zend_central.error_logging
	'zend_central.error_logging_short' => 'If enabled, the Zend Platform GUI will log errors into the file \'zend_central_error.log\'',
	'zend_central.error_logging_full' => '',
	
	// zend_central.gui_address
	'zend_central.gui_address_short' => 'Full URL address for the Zend Platform Central GUI',
	'zend_central.gui_address_full' => '',

	// zend_central.node_address
	'zend_central.node_address_short' => 'The exact server address, as entered when it was registered to the Zend Platform Central and as appears in the Zend Platform GUI',
	'zend_central.node_address_full' => '',

	// zend_central.web_service.enable
	'zend_central.web_service.enable_short' => 'Enable Web Service',
	'zend_central.web_service.enable_full' => '',
	
	// zend_monitor.log_dir
	'zend_monitor.log_dir_short' => 'Place for reporting engine to keep its logfiles',
	'zend_monitor.log_dir_full' => '',

	// zend_monitor.collector_cert
	'zend_monitor.collector_cert_short' => 'Collector Center\'s SSL certificate',
	'zend_monitor.collector_cert_full' => '',

	// zend_monitor.server_key
	'zend_monitor.server_key_short' => 'Node\'s SSL private key',
	'zend_monitor.server_key_full' => '',

	// zend_monitor.server_cert
	'zend_monitor.server_cert_short' => 'Node\'s SSL certificate',
	'zend_monitor.server_cert_full' => '',

	// zend_monitor.collector_host
	'zend_monitor.collector_host_short' => 'Address of the Collector Center',
	'zend_monitor.collector_host_full' => '',

	// zend_monitor.collector_port
	'zend_monitor.collector_port_short' => 'Port number for the Collector Center',
	'zend_monitor.collector_port_full' => '',
	
	// zend_monitor.node_collector_port
	'zend_monitor.node_collector_port_short' => 'Port number for the Node Collector Service',
	'zend_monitor.node_collector_port_full' => '',
	
	// zend_monitor.reconnect_timeout
	'zend_monitor.reconnect_timeout_short' => 'Wait period between attemps to connect to the Collector Center',
	'zend_monitor.reconnect_timeout_full' => '',

	// zend_monitor.collector_key
	'zend_monitor.collector_key_short' => 'Collector Center\'s SSL private key',
	'zend_monitor.collector_key_full' => '',

	// zend_monitor.server_key_dir
	'zend_monitor.server_key_dir_short' => 'Directory where Collector Center places registered node\'s SSL certificates',
	'zend_monitor.server_key_dir_full' => '',

	// zend_monitor.events_db
	'zend_monitor.events_db_short' => 'Event database file',
	'zend_monitor.events_db_full' => '',

	// zend_monitor.servers_db
	'zend_monitor.servers_db_short' => 'Servers database file',
	'zend_monitor.servers_db_full' => '',

	// zend_monitor.enable
	'zend_monitor.enable_short' => 'Event monitoring is enabled',
	'zend_monitor.enable_full' => '',

	// zend_monitor.warmup_requests
	'zend_monitor.warmup_requests_short' => 'Number of requests to gather statistics and calculate averages',
	'zend_monitor.warmup_requests_full' => '',

	// zend_monitor.custom.enable
	'zend_monitor.custom.enable_short' => 'Enable custom events reporting',
	'zend_monitor.custom.enable_full' => '',

	// zend_monitor.load.enable
	'zend_monitor.load.enable_short' => 'Enable load events reporting',
	'zend_monitor.load.enable_full' => '',

	// zend_monitor.outsize.enable
	'zend_monitor.outsize.enable_short' => 'Enable output size events reporting',
	'zend_monitor.outsize.enable_full' => '',

	// zend_monitor.devmem.enable
	'zend_monitor.devmem.enable_short' => 'Enable average memory usage events reporting',
	'zend_monitor.devmem.enable_full' => '',

	// zend_monitor.memsize.enable
	'zend_monitor.memsize.enable_short' => 'Enable memory usage events reporting',
	'zend_monitor.memsize.enable_full' => '',

	// zend_monitor.longfunction.enable
	'zend_monitor.longfunction.enable_short' => 'Enable function runtime events reporting',
	'zend_monitor.longfunction.enable_full' => '',

	// zend_monitor.funcerror.enable
	'zend_monitor.funcerror.enable_short' => 'Enable function error events reporting',
	'zend_monitor.funcerror.enable_full' => '',

	// zend_monitor.zenderror.enable
	'zend_monitor.zenderror.enable_short' => 'Enable PHP error reporting',
	'zend_monitor.zenderror.enable_full' => '',

	// zend_monitor.longscript.enable
	'zend_monitor.longscript.enable_short' => 'Enable long script runtime reporting',
	'zend_monitor.longscript.enable_full' => '',

	// zend_monitor.devscript.enable
	'zend_monitor.devscript.enable_short' => 'Enable average script runtime events reporting',
	'zend_monitor.devscript.enable_full' => '',

	// zend_monitor.max_load.severe
	'zend_monitor.max_load.severe_short' => 'Load average to trigger severe event',
	'zend_monitor.max_load.severe_full' => '',

	// zend_monitor.max_load
	'zend_monitor.max_load_short' => 'Load average to trigger event',
	'zend_monitor.max_load_full' => '',

	// zend_monitor.max_mem_dev
	'zend_monitor.max_mem_dev_short' => 'Memory usage deviation from average to trigger event',
	'zend_monitor.max_mem_dev_full' => '',

	// zend_monitor.max_mem_dev.severe
	'zend_monitor.max_mem_dev.severe_short' => 'Memory usage deviation from average to trigger severe event',
	'zend_monitor.max_mem_dev.severe_full' => '',

	// zend_monitor.max_function_runtime
	'zend_monitor.max_function_runtime_short' => 'Function run time to trigger event',
	'zend_monitor.max_function_runtime_full' => '',

	// zend_monitor.max_function_runtime.severe
	'zend_monitor.max_function_runtime.severe_short' => 'Function run time to trigger severe event',
	'zend_monitor.max_function_runtime.severe_full' => '',
	
	// zend_monitor.maxcontentdownload.enable
	'zend_monitor.maxcontentdownload.enable_short' => 'Enable slow content download runtime events reporting',
	'zend_monitor.maxcontentdownload.enable_full' => '',
	
	// zend_monitor.max_content_download_time
	'zend_monitor.max_content_download_time_short' => 'Function \'fpassthru\' run time to trigger event',
	'zend_monitor.max_content_download_time_full' => '',

	// zend_monitor.max_content_download_time.severe
	'zend_monitor.max_content_download_time.severe_short' => 'Function \'fpassthru\' run time to trigger severe event',
	'zend_monitor.max_content_download_time.severe_full' => '',
	
	// zend_monitor.maxapacheprocesses.enable
	'zend_monitor.maxapacheprocesses.enable_short' => 'Enable maximum apache processes events reporting',
	'zend_monitor.maxapacheprocesses.enable_full' => '',
	
	// zend_monitor.max_apache_processes
	'zend_monitor.max_apache_processes_short' => 'Maximum Apache processes to trigger event',
	'zend_monitor.max_apache_processes_full' => '',
	
	// zend_monitor.max_apache_processes.severe
	'zend_monitor.max_apache_processes.severe_short' => 'Maximum Apache processes to trigger severe event',
	'zend_monitor.max_apache_processes.severe_full' => '',


	// zend_monitor.max_time_dev
	'zend_monitor.max_time_dev_short' => 'Script run time deviation from average to trigger event',
	'zend_monitor.max_time_dev_full' => '',

	// zend_monitor.max_time_dev.severe
	'zend_monitor.max_time_dev.severe_short' => 'Script run time deviation from average to trigger severe event',
	'zend_monitor.max_time_dev.severe_full' => '',

	// zend_monitor.max_memory_usage
	'zend_monitor.max_memory_usage_short' => 'Memory usage amount to trigger event',
	'zend_monitor.max_memory_usage_full' => '',

	// zend_monitor.max_memory_usage.severe
	'zend_monitor.max_memory_usage.severe_short' => 'Memory usage amount to trigger severe event',
	'zend_monitor.max_memory_usage.severe_full' => '',

	// zend_monitor.max_script_runtime
	'zend_monitor.max_script_runtime_short' => 'Script run time to trigger event',
	'zend_monitor.max_script_runtime_full' => '',

	// zend_monitor.max_script_runtime.severe
	'zend_monitor.max_script_runtime.severe_short' => 'Script run time to trigger severe event',
	'zend_monitor.max_script_runtime.severe_full' => '',

	// zend_monitor.error_level
	'zend_monitor.error_level_short' => 'PHP error levels that trigger event',
	'zend_monitor.error_level_full' => '',

	// zend_monitor.error_level.severe
	'zend_monitor.error_level.severe_short' => 'PHP error levels that trigger severe event',
	'zend_monitor.error_level.severe_full' => '',

	// zend_monitor.max_output_dev
	'zend_monitor.max_output_dev_short' => 'Output size deviation from average to trigger event',
	'zend_monitor.max_output_dev_full' => '',

	// zend_monitor.load_sample_freq
	'zend_monitor.load_sample_freq_short' => 'How frequent load average is checked',
	'zend_monitor.load_sample_freq_full' => '',

	// zend_monitor.watch_functions
	'zend_monitor.watch_functions_short' => 'Functions to watch for run time and errors',
	'zend_monitor.watch_functions_full' => '',

	// zend_monitor.watch_results
	'zend_monitor.watch_results_short' => 'Functions to watch for bad return values',
	'zend_monitor.watch_results_full' => '',

	// zend_monitor.silence_level
	'zend_monitor.silence_level_short' => 'Determines whether or not to trigger PHP error events, when the error reporting level is 0',
	'zend_monitor.silence_level_full' => '',
	// texts for options array
	'silence_level_0' => 'Always report errors',
	'silence_level_1' => 'Ignore all silenced errors',
	'silence_level_2' => 'Report errors that were not silenced with the @ operator',

	// zend_monitor.event_overload_threshold
	'zend_monitor.event_overload_threshold_short' => 'minimal time 1000 events should take for Monitor to start "overload mode"',
	'zend_monitor.event_overload_threshold_full' => '',

	'zend_monitor.report_variables_data_short' => 'The variables data we save when event occurs',
	'zend_monitor.report_variables_data_full' => '',
	
	// text for the options array
	'report_variables_data_uploaded_files' => 'Uploaded files',
	'report_variables_data__raw_post_data' => 'Raw post data',
	'report_variables_data_environment' => 'Environment',
	
	// zend_debugger.network_trace
	'zend_debugger.network_trace_short' => 'Internal use, do not change it without guidance',
	'zend_debugger.network_trace_full' => '',

	// zend_debugger.connect_password
	'zend_debugger.connect_password_short' => 'Internal use, do not change it without guidance',
	'zend_debugger.connect_password_full' => '',

	// zend_debugger.max_msg_size
	'zend_debugger.max_msg_size_short' => 'Internal use, do not change it without guidance',
	'zend_debugger.max_msg_size_full' => '',

	// zend_accelerator.consistency_checks
	'zend_accelerator.consistency_checks_short' => 'Check cache\'s checksum each N requests',
	'zend_accelerator.consistency_checks_full' => '',

	// zend_accelerator.dups_fix
	'zend_accelerator.dups_fix_short' => 'Disable \'duplicate definition\' errors for accelerated code',
	'zend_accelerator.dups_fix_full' => '',

	// zend_accelerator.force_restart_timeout
	'zend_accelerator.force_restart_timeout_short' => 'Time to wait for cache being unused when restart is scheduled (seconds)',
	'zend_accelerator.force_restart_timeout_full' => '',

	// zend_accelerator.max_warmup_hits
	'zend_accelerator.max_warmup_hits_short' => 'How many hits are considered \'warmup\' (for statistics)',
	'zend_accelerator.max_warmup_hits_full' => '',

	// zend_accelerator.revalidate_freq
	'zend_accelerator.revalidate_freq_short' => 'How often to check file timestamps on Windows (seconds)',
	'zend_accelerator.revalidate_freq_full' => '',

	// zend_accelerator.php_api_lifetime
	'zend_accelerator.php_api_lifetime_short' => 'Maximum lifetime for API cached data',
	'zend_accelerator.php_api_lifetime_full' => '',
	
	//zend_ini_file
	'zend_ini_file_short' => 'Path to the zend.ini configuration file',
	'zend_ini_file_full' => '',
	
	'zend_product_short' => 'Product Version',
	'zend_product_full' => '',
	
	// zend products version directives
	'zend_optimizer.version_short' => 'Version number for the currently installed Zend Optimizer package',
	'zend_optimizer.version_full' => '',
	
	'zend_platform.version_short' => 'Version number for the currently installed Zend Platform package',
	'zend_platform.version_full' => '',
	
	'zend_studio_server.version_short' => 'Version number for the currently installed Zend Studio Server package',
	'zend_studio_server.version_full' => '',
	
	'zend_performance_suite.version_short' => 'Version number for the currently installed Zend Performance Suite package',
	'zend_performance_suite.version_full' => '',
	
	//session clustering
	'mod_cluster.daemon_verbosity_level_short' => 'Level of debug messages (1..5)',
	'mod_cluster.daemon_verbosity_level_full' => '',
	
	'mod_cluster.number_of_threads_short' => 'Number of worker threads. Can be increased if the running machine is strong enough',
	'mod_cluster.number_of_threads_full' => '',
	
	'mod_cluster.garbage_collection_delta_short' => 'Number of seconds between two executions of the garbage collector',
	'mod_cluster.garbage_collection_delta_full' => '',
	
	'mod_cluster.session_lifetime_short' => 'The lifetime of a session (in seconds). Session that will be older than this value will be removed by garbage collection',
	'mod_cluster.session_lifetime_full'  => '',
	
	'mod_cluster.statistics_delta_minutes_short' => 'Number of minutes between statistics dump to the log file',
	'mod_cluster.statistics_delta_minutes_full' => '',
	
	'mod_cluster.network.hostname_short' => 'The identification of the running machine',
	'mod_cluster.network.hostname_full' => '',
	
	'mod_cluster.network.tcp_port_remote_short' => 'Port via which the daemon will receive connections from other daemons',
	'mod_cluster.network.tcp_port_remote_full' => '',
	
	'mod_cluster.network.unix_socket_permissions_short' => 'When daemon is run, it creates a ZendSessionManager.sock file, with these permissions',
	'mod_cluster.network.unix_socket_permissions_full' => '',
	
	'mod_cluster.allowed_hosts_short' => 'Comma seperated list of allowed IPs or IP masks that can connect to the daemon',
	'mod_cluster.allowed_hosts_full' => '',
	
	'mod_cluster.storage.use_permanent_storage_short' => 'If enabled, sessions will be stored on disk, else, in memory',
	'mod_cluster.storage.use_permanent_storage_full' => '',
	
	'mod_cluster.storage.memory_cache_size_short' => 'Specifies the number of bytes for memory caching of sessions',
	'mod_cluster.storage.memory_cache_size_full' => '',
	
	'mod_cluster.storage.flush_delta_short' => 'If disabled, sessions are written write-through. Otherwise, write-back is used, with this argument as the number of seconds for delay',
	'mod_cluster.storage.flush_delta_full' => '',
	
	'mod_cluster.storage.save_path_short' => 'The location on disk where saved sessions are stored',
	'mod_cluster.storage.save_path_full' => '',
	
	'mod_cluster.storage.dir_levels_short' => 'Specifies the number of dir levels used in saving files',
	'mod_cluster.storage.dir_levels_full' => '',
	
	'mod_cluster.storage.filename_cache_num_entries_short' => 'Number of entries in an internal cache',
	'mod_cluster.storage.filename_cache_num_entries_full' => '',
	
	'mod_cluster.lock_timeout_short' => 'Number of seconds to wait for locked session before giving up and acquiring a new session id',
	'mod_cluster.lock_timeout_full' => '',
	
	'zend_temp_dir_short' => 'The location in which temp files of Zend products are stored',
	'zend_temp_dir_full' => '',
	
	'zend_monitor.log_dir_short' => 'Location in which log files are stored',
	'zend_monitor.log_dir_full' => '',
	
	'mod_cluster.network.use_unix_sockets_short' => 'If enabled, unix sockets are used, else, TCP/IP sockets are used',
	'mod_cluster.network.use_unix_sockets_full' => '',
	
	'mod_cluster.network.tcp_port_local_short' => 'If unix sockets are being used, then this port will be used for communications between mod_cluster and daemon',
	'mod_cluster.network.tcp_port_local_full' => '',
	
	'mod_cluster.verbosity_level_short' => 'Level of debug messages (1..3) ',
	'mod_cluster.verbosity_level_full' => '',
	
	'mod_cluster.ha.broadcast_delta_short' => 'The period (in seconds) of broadcast messages, sent by the ZendSessionManager on each node',
	'mod_cluster.ha.broadcast_delta_full' => 'The period (in seconds) of broadcast messages, sent by the ZendSessionManager on each node. Each message is a viable fact that the daemon is running and contains an information about its load factor',
	
	'mod_cluster.ha.udp_port_short' => '',
	'mod_cluster.ha.udp_port_full' => '',
	
	'mod_cluster.message_server_port_short' => 'The port a message server will be able to connect in order to send control messages',
	'mod_cluster.message_server_port_full' => '',
	
	'mod_cluster.log_rotation_size_short' => 'Size of log file in MBs',
	'mod_cluster.log_rotation_size_full' => '',
	
	'mod_cluster.log_rotation_delta_short' => 'Interval (in minutes) for a check for the log rotation need',
	'mod_cluster.log_rotation_delta_full' => '',
	
	// Job Q directives
	'zend_jq.port_short' => 'The port on which the daemon listens for requests',
	'zend_jq.port_full' => '',
	
	// Job Q directives
	'zend_jq.host_short' => 'The IP address the JobQueue daemon publish itself with',
	'zend_jq.host_full' => '',
	
	'zend_jq.alias_short' => 'The JobQueue daemon alias as it\'s displayed in the GUI',
	'zend_jq.alias_full' => '',
	
	'zend_jq.data_dir_short' => 'The path to the base directory for the filesystem persistency',
	'zend_jq.data_dir_full' => '',
	
	'zend_jq.fastcgi_conf_short' => 'The path to configuration file for the fastcgi used to perform the jobs',
	'zend_jq.fastcgi_conf_full' => '',
	
	'zend_jq.document_root_short' => 'The root directory in which the scripts for execution reside',
	'zend_jq.document_root_full' => '',
	
	'zend_jq.login_pwd_short' => 'The MD5 of the login password for the queue',
	'zend_jq.login_pwd_full' => '',
	
	'zend_jq.max_num_of_request_workers_short' => 'The number of threads used to accept incoming requests (jobs)',
	'zend_jq.max_num_of_request_workers_full' => '',
	
	'zend_jq.max_num_of_process_workers_short' => 'The number of threads used to process jobs (should be equal to the number of fastcgi processes)',
	'zend_jq.max_num_of_process_workers_full' => '',
	
	'zend_jq.max_history_short' => 'The maximum number of complete and failed jobs stored in history (currently not supported)',
	'zend_jq.max_history_full' => '',
	
	'zend_jq.debug_level_short' => 'Level of debug messages (1..3)',
	'zend_jq.debug_level_full' => '',
	
	'zend_jq.max_queue_depth_short' => 'The maximum jobs allowed in the queue. if no directive is provided depth is unlimited',
	'zend_jq.max_queue_depth_full' => '',
	
	'zend_jq.initial_backoff_short' => 'The time in seconds used as the basis for the for the backoff time',
	'zend_jq.initial_backoff_full' => '',
	
	'zend_jq.backoff_factor_short' => 'The factor by which the the backoff time is multiplied after each execution failure',
	'zend_jq.backoff_factor_full' => '',
	
	'zend_jq.max_exec_failures_short' => 'The maximum number of allowed retries for an execution failed job',
	'zend_jq.max_exec_failures_full' => '',
	
	'zend_jq.allowed_hosts_short' => 'The IPs that are allowed to connect to the daemon',
	'zend_jq.allowed_hosts_full' => '',
	
	'zend_jq.max_history_time_short' => 'The maximum time a job is kept in history (unless it has property preserved=yes). if no directive is provided time is unlimited',
	'zend_jq.max_history_time_full' => '',
	
	'zend_jq.history_refresh_interval_short' => 'The interval in hours between persistent storage refreshes (jobs that passed their max_history_time are removed)',
	'zend_jq.history_refresh_interval_full' => '',
	
	'zend_jq.db_host_short' => 'The hostname of the database used by daemon',
	'zend_jq.db_host_full' => '',
	
	'zend_jq.db_port_short' => 'The port of the database used by daemon (if omitted the default database port is used)',
	'zend_jq.db_port_full' => '',
	
	'zend_jq.db_user_short' => 'The username of the database used by daemon',
	'zend_jq.db_user_full' => '',
	
	'zend_jq.moving_window_size_short' => 'Sliding-window to collect Job Queue Statistics',
	'zend_jq.moving_window_size_full' => '',
	
	'zend_jq.db_password_short' => 'The password of the database used by daemon',
	'zend_jq.db_password_full' => '',
	
	'zend_jq.message_server_port_short' => 'The port on which the daemon listens for signals ( reload directives and graceful shutdown )',
	'zend_jq.message_server_port_full' => '',
	
	'zend_jq.db_socket_short' => 'Job Queue database file',
	'zend_jq.db_socket_full' => '',
	
	'zend_core.default_gui_language_short' => '',
	'zend_core.default_gui_language_full' => '',
	
	'zend_core_dir_short' => '',
	'zend_core_dir_full' => '',
	
	'zend_core.allow_restart_short' => '',
	'zend_core.allow_restart_full' => '',
	
	'zend_debugger.tunnel_min_port_short' => 'Minimal possible value of Debugger tunneling port',
	'zend_debugger.tunnel_min_port_full' => '',
	
	'zend_debugger.tunnel_max_port_short' => 'Maximal possible value of Debugger tunneling port',
	'zend_debugger.tunnel_max_port_full' => '',
	
	'zend_monitor.security_black_list_short' => 'The words that are filtered out of the chosen superglobal variables (@file reads list from file)',
	'zend_monitor.security_black_list_full' => '',
	
	'zend_monitor.security_filtered_variables_short' => 'The superglobal variables that are filtered for blacklisted words (given in the \'zend_monitor.security_black_list\' directive)',
	'zend_monitor.security_filtered_variables_full' => '',
	
	// general texts for directives/extensions
	'bytes' => 'Bytes',
	'kilo_bytes' => 'KBytes',
	'mega_bytes' => 'MBytes',
	'minutes' => 'min',
	'seconds' => 'sec',
	'mili_seconds' => 'msec',
	'digits' => 'digits',
	'processes' => 'processes',





	'essential_extension_for_platform' => 'This is an essential extension to Zend Platform GUI that cannot be disabled',
);
