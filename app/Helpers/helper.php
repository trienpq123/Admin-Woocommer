<?php
// replace ký tự
if (!function_exists('removeVietnameseAccents')) {
    function removeVietnameseAccents($str)
    {
        $accents_arr = array(
            'a' => array('á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'),
            'e' => array('é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'),
            'i' => array('í', 'ì', 'ỉ', 'ĩ', 'ị'),
            'o' => array('ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'),
            'u' => array('ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'),
            'y' => array('ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'),
            'd' => array('đ'),
            'A' => array('Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ'),
            'E' => array('É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ'),
            'I' => array('Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'),
            'O' => array('Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ'),
            'U' => array('Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự'),
            'Y' => array('Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'),
            'D' => array('Đ','đ')
        );

        foreach ($accents_arr as $nonAccent => $accentArr) {
            foreach ($accentArr as $accent) {
                $str = str_replace($accent, $nonAccent, $str);
            }
        }

        // Thay thế các ký tự không hợp lệ cho tên class
        $str = preg_replace('/[^a-zA-Z0-9-_]/', '', $str);

        return $str;
    }
}
