<?hh
// @generated by idl-to-hni.php

/* This function will turn output buffering on. While output buffering is
 * active no output is sent from the script (other than headers), instead the
 * output is stored in an internal buffer.  The contents of this internal
 * buffer may be copied into a string variable using ob_get_contents(). To
 * output what is stored in the internal buffer, use ob_end_flush().
 * Alternatively, ob_end_clean() will silently discard the buffer contents.
 * Warning  Some web servers (e.g. Apache) change the working directory of a
 * script when calling the callback function. You can change it back by e.g.
 * chdir(dirname($_SERVER['SCRIPT_FILENAME'])) in the callback function. 
 * Output buffers are stackable, that is, you may call ob_start() while
 * another ob_start() is active. Just make sure that you call ob_end_flush()
 * the appropriate number of times. If multiple output callback functions are
 * active, output is being filtered sequentially through each of them in
 * nesting order.
 * @param mixed $output_callback - An optional output_callback function may be
 * specified. This function takes a string as a parameter and should return a
 * string. The function will be called when the output buffer is flushed
 * (sent) or cleaned (with ob_flush(), ob_clean() or similar function) or when
 * the output buffer is flushed to the browser at the end of the request. When
 * output_callback is called, it will receive the contents of the output
 * buffer as its parameter and is expected to return a new output buffer as a
 * result, which will be sent to the browser. If the output_callback is not a
 * callable function, this function will return FALSE.  If the callback
 * function has two parameters, the second parameter is filled with a
 * bit-field consisting of PHP_OUTPUT_HANDLER_START, PHP_OUTPUT_HANDLER_CONT
 * and PHP_OUTPUT_HANDLER_END.  If output_callback returns FALSE original
 * input is sent to the browser.  The output_callback parameter may be
 * bypassed by passing a NULL value.  ob_end_clean(), ob_end_flush(),
 * ob_clean(), ob_flush() and ob_start() may not be called from a callback
 * function. If you call them from callback function, the behavior is
 * undefined. If you would like to delete the contents of a buffer, return ""
 * (a null string) from callback function. You can't even call functions using
 * the output buffering functions like print_r($expression, true) or
 * highlight_file($filename, true) from a callback function.  In PHP 4.0.4,
 * ob_gzhandler() was introduced to facilitate sending gz-encoded data to web
 * browsers that support compressed web pages. ob_gzhandler() determines what
 * type of content encoding the browser will accept and will return its output
 * accordingly.
 * @param int $chunk_size - If the optional parameter chunk_size is passed,
 * the buffer will be flushed after any output call which causes the buffer's
 * length to equal or exceed chunk_size. Default value 0 means that the
 * function is called only in the end, other special value 1 sets chunk_size
 * to 4096.
 * @param bool $erase - If the optional parameter erase is set to FALSE, the
 * buffer will not be deleted until the script finishes. This causes that
 * flushing and cleaning functions would issue a notice and return FALSE if
 * called.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function ob_start(mixed $output_callback = null,
                  int $chunk_size = 0,
                  bool $erase = true): bool;

/* This function discards the contents of the output buffer.  This function
 * does not destroy the output buffer like ob_end_clean() does.
 */
<<__Native>>
function ob_clean(): void;

/* This function will send the contents of the output buffer (if any). If you
 * want to further process the buffer's contents you have to call
 * ob_get_contents() before ob_flush() as the buffer contents are discarded
 * after ob_flush() is called.  This function does not destroy the output
 * buffer like ob_end_flush() does.
 */
<<__Native>>
function ob_flush(): void;

/* This function discards the contents of the topmost output buffer and turns
 * off this output buffering. If you want to further process the buffer's
 * contents you have to call ob_get_contents() before ob_end_clean() as the
 * buffer contents are discarded when ob_end_clean() is called.
 * @return bool - Returns TRUE on success or FALSE on failure. Reasons for
 * failure are first that you called the function without an active buffer or
 * that for some reason a buffer could not be deleted (possible for special
 * buffer).
 */
<<__Native>>
function ob_end_clean(): bool;

/* This function will send the contents of the topmost output buffer (if any)
 * and turn this output buffer off. If you want to further process the
 * buffer's contents you have to call ob_get_contents() before ob_end_flush()
 * as the buffer contents are discarded after ob_end_flush() is called. This
 * function is similar to ob_get_flush(), except that ob_get_flush() returns
 * the buffer as a string.
 * @return bool - Returns TRUE on success or FALSE on failure. Reasons for
 * failure are first that you called the function without an active buffer or
 * that for some reason a buffer could not be deleted (possible for special
 * buffer).
 */
<<__Native>>
function ob_end_flush(): bool;

/* Flushes the write buffers of PHP and whatever backend PHP is using (CGI, a
 * web server, etc). This attempts to push current output all the way to the
 * browser with a few caveats.  flush() may not be able to override the
 * buffering scheme of your web server and it has no effect on any client-side
 * buffering in the browser. It also doesn't affect PHP's userspace output
 * buffering mechanism. This means you will have to call both ob_flush() and
 * flush() to flush the ob output buffers if you are using those.  Several
 * servers, especially on Win32, will still buffer the output from your script
 * until it terminates before transmitting the results to the browser.  Server
 * modules for Apache like mod_gzip may do buffering of their own that will
 * cause flush() to not result in data being sent immediately to the client. 
 * Even the browser may buffer its input before displaying it. Netscape, for
 * example, buffers text until it receives an end-of-line or the beginning of
 * a tag, and it won't render tables until the </table> tag of the outermost
 * table is seen.  Some versions of Microsoft Internet Explorer will only
 * start to display the page after they have received 256 bytes of output, so
 * you may need to send extra whitespace before flushing to get those browsers
 * to display the page.
 */
<<__Native>>
function flush(): void;

/* Gets the current buffer contents and delete current output buffer. 
 * ob_get_clean() essentially executes both ob_get_contents() and
 * ob_end_clean().
 * @return mixed - Returns the contents of the output buffer and end output
 * buffering. If output buffering isn't active then FALSE is returned.
 */
<<__Native>>
function ob_get_clean(): mixed;

/* Gets the contents of the output buffer without clearing it.
 * @return mixed - This will return the contents of the output buffer or
 * FALSE, if output buffering isn't active.
 */
<<__Native>>
function ob_get_contents(): mixed;

/* ob_get_flush() flushes the output buffer, return it as a string and turns
 * off output buffering. This function is similar to ob_end_flush(), except
 * that this function returns the buffer as a string.
 * @return mixed - Returns the output buffer or FALSE if no buffering is
 * active.
 */
<<__Native>>
function ob_get_flush(): mixed;

/* This will return the length of the contents in the output buffer.
 * @return int - Returns the length of the output buffer contents or FALSE if
 * no buffering is active.
 */
<<__Native>>
function ob_get_length(): int;

/* Returns the nesting level of the output buffering mechanism.
 * @return int - Returns the level of nested output buffering handlers or zero
 * if output buffering is not active.
 */
<<__Native>>
function ob_get_level(): int;

/* ob_get_status() returns status information on either the top level output
 * buffer or all active output buffer levels if full_status is set to TRUE.
 * @param bool $full_status - TRUE to return all active output buffer levels.
 * If FALSE or not set, only the top level output buffer is returned.
 * @return array
 */
<<__Native>>
function ob_get_status(bool $full_status = false): array;

/* ob_implicit_flush() will turn implicit flushing on or off. Implicit
 * flushing will result in a flush operation after every output call, so that
 * explicit calls to flush() will no longer be needed.
 * @param bool $flag - TRUE to turn implicit flushing on, FALSE otherwise.
 */
<<__Native>>
function ob_implicit_flush(bool $flag = true): void;

/* Lists all output handlers in use.
 * @return array - This will return an array with the output handlers in use
 * (if any). If output_buffering is enabled or an anonymous function was used
 * with ob_start(), ob_list_handlers() will return "default output handler".
 */
<<__Native>>
function ob_list_handlers(): array;

/* This function adds another name/value pair to the URL rewrite mechanism.
 * The name and value will be added to URLs (as GET parameter) and forms (as
 * hidden input fields) the same way as the session ID when transparent URL
 * rewriting is enabled with session.use_trans_sid. Please note that absolute
 * URLs (http://example.com/..) aren't rewritten.  This function's behavior is
 * controlled by the url_rewriter.tags php.ini parameter. Calling this
 * function will implicitly start output buffering if it is not active
 * already.
 * @param string $name - The variable name.
 * @param string $value - The variable value.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function output_add_rewrite_var(string $name,
                                string $value): bool;

/* This function resets the URL rewriter and removes all rewrite variables
 * previously set by the output_add_rewrite_var() function or the session
 * mechanism (if session.use_trans_sid was set on session_start()).
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function output_reset_rewrite_vars(): bool;

/* Adds an entry to a log file that's written when server crashes. This is
 * useful for diagnose why server crashed. For example, logged-on user's ID.
 * @param string $name - Name of the value.
 * @param string $value - Value to write to log.
 */
<<__HipHopSpecific, __Native>>
function hphp_crash_log(string $name,
                        string $value): void;

/* Tallies a number for server stats.
 * @param string $name - Name of the entry. This name can then be used with
 * admin commands to retrieve stats while server is running.
 * @param int $value - An integer to add up.
 */
<<__HipHopSpecific, __Native>>
function hphp_stats(string $name,
                    int $value): void;

/* Checks current value of a server stats.
 * @param string $name - Name of the entry.
 * @return int - Currently accumulated count.
 */
<<__HipHopSpecific, __Native>>
function hphp_get_stats(string $name): int;

/* Returns status of different server threads.
 * @return array - Array of thread statuses.
 */
<<__HipHopSpecific, __Native>>
function hphp_get_status(): array;

/* Returns I/O status of current thread. EnableNetworkIOStatus has to be
 * turned on.
 * @return array - Array of all I/O so far for current thread.
 */
<<__HipHopSpecific, __Native>>
function hphp_get_iostatus(): array;

/* Use this name, instead of IP address or URL for I/O status reporting. The
 * name will only be effective for the upcoming I/O and it will be reset
 * immediately after. Use logical network address for grouping network I/O by
 * intention, instead of physical addresses.
 * @param string $name - Specifies the logical name to replace with.
 */
<<__HipHopSpecific, __Native>>
function hphp_set_iostatus_address(string $name): void;

/* Returns timestamps of different request events.
 * @param bool $get_as_float - same as in microtime() to specify output
 * format, except it defaults to true for float format.
 * @return mixed - An array of three timestamps: 'queue', the time a request
 * is received and queued up; 'process-wall', the wall clock time a request
 * starts to get processed; and 'process-cpu', the CPU clock time a request
 * starts to get processed.
 */
<<__HipHopSpecific, __Native>>
function hphp_get_timers(bool $get_as_float = true): mixed;

/* Dumps all variables in global state, including global variables, static
 * variables, class statics and others.
 * @param bool $serialize - Specifies what format to use, whether to serialize
 * into a string.
 * @return mixed - An array of global state.
 */
<<__HipHopSpecific, __Native>>
function hphp_output_global_state(bool $serialize = true): mixed;

/* @return int - Returns the current instruction counter value.
 */
<<__HipHopSpecific, __Native("NoInjection")>>
function hphp_instruction_counter(): int;

/* @return mixed - An array of hardware counters
 */
<<__HipHopSpecific, __Native("NoInjection")>>
function hphp_get_hardware_counters(): mixed;

/* @param string $events - comma separated list of hardware events
 * @return bool - returns TRUE on success and FALSE on failure
 */
<<__HipHopSpecific, __Native("NoInjection")>>
function hphp_set_hardware_events(string $events = null): bool;

<<__HipHopSpecific, __Native("NoInjection")>>
function hphp_clear_hardware_events(): void;