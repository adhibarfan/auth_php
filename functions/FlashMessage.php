<!-- /**
 * @Author: adhibarfan
 * @Date:   2016-11-04 17:03:33
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-11-04 17:10:14
 */
 -->

 <?php class FlashMessage
{

    session_start();

    function render()
    {
        if (!isset($_SESSION['messages'])) {
            return null;
        }
        $messages = $_SESSION['messages'];
        unset($_SESSION['messages']);
        return implode('<br/>', $messages);
    }

    function add($message)
    {
        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = array();
        }
        $_SESSION['messages'][] = $message;
    }

}
?>
