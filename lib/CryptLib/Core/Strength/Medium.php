<?php
/**
 * The Medium Strength representitive class
 *
 * Medium Strength is useful for the vast majority of cryptographic needs.  It
 * is plenty strong enough for generating salts and one-time use tokens.
 *
 * PHP version 5.3
 *
 * @category   PHPCryptLib
 * @package    Core
 * @subpackage Strength
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build @@version@@
 */

namespace CryptLib\Core\Strength;


/**
 * The Medium Strength representitive class
 *
 * Medium Strength is useful for the vast majority of cryptographic needs.  It
 * is plenty strong enough for generating salts and one-time use tokens.
 *
 * @category   PHPCryptLib
 * @package    Core
 * @subpackage Strength
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class Medium extends \CryptLib\Core\Strength {

    /**
     * @internal
     * @var int The current value of the instance
     */
    protected $value = 5;

}
