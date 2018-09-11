<?php
/**
 * Woocommerce Enquiry Cart Plugin.
 *
 * @copyright Copyright (C) 2018, Glabs Tech - support@glabs.tech
 * @license   https://mit-license.org - The MIT License
 *
 * @wordpress-plugin
 * Plugin Name: Enquiry Cart for Woocommerce
 * Version:     0.1
 * Plugin URI:  http://glabs.tech/labs/woocommerce-enquiry-cart
 * Description: Enquiry cart for woocommerce
 * Author:      William Donayre Jr.
 * Author URI:  http://wdonayre.com
 * Text Domain: woocommerce-enquiry-cart
 * Domain Path: /languages/
 * License:     MIT
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

if ( ! defined( 'WEC_FILE' ) ) {
	define( 'WEC_FILE', __FILE__ );
}
// Load the Enquiry Cart plugin.
require_once dirname( WEC_FILE ) . '/wp-seo-main.php';