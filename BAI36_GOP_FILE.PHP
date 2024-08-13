<!-- gộp file: gộp code 2 file php thành 1 file duy nhất 
VD: ta muốn gộp code bài 30 vào bài 36 này (nối sau code bài 36)
-->
<?php
echo "đây là bài 36" . "<br>";
//muốn gộp code bài 30 vào bài 36: ta dùng require gọi đến bài 30
require "BAI30_VONGLAP_FOR_ARRAY_P2.PHP";
require "BAI30_VONGLAP_FOR_ARRAY_P2.PHP";  //nếu ta gọi 2 lần thì code bài 30 sẽ bị lặp

//hoặc ta có thể dùng require_once
require_once "BAI30_VONGLAP_FOR_ARRAY_P2.PHP";
require_once "BAI30_VONGLAP_FOR_ARRAY_P2.PHP"; //dù có gọi nhiều lần thì code cx ko lặp lại

/*ĐIỂM KHÁC NHAU GIỮA REQUIRE VÀ REQUIRE_ONCE
-require:gộp file bài 30 vào bài 36, tuy nhiên khi ta gọi nhiều lần require "bài 30..." thì nó sẽ lặp lại code trong đó
-require_once: gộp file bài 30 vào bài 36, tuy nhiên khi gọi nhiều lần thì require_once chỉ lấy đoạn code đầu tiên thôi
*/

//2. include và include_once: cũng dùng để gộp file giống require:
//muốn gộp code bài 30 vào bài 36: ta dùng include gọi đến bài 30
include "BAI30_VONGLAP_FOR_ARRAY_P2.PHP";
include "BAI30_VONGLAP_FOR_ARRAY_P2.PHP";  //nếu ta gọi 2 lần thì code bài 30 sẽ bị lặp

//hoặc ta có thể dùng include_once
include_once "BAI30_VONGLAP_FOR_ARRAY_P2.PHP";
include_once "BAI30_VONGLAP_FOR_ARRAY_P2.PHP"; //dù có gọi nhiều lần thì code cx ko lặp lại

/*ĐIỂM KHÁC NHAU GIỮA INCLUDE VÀ INCLUDE_ONCE
-include:gộp file bài 30 vào bài 36, tuy nhiên khi ta gọi nhiều lần include "bài 30..." thì nó sẽ lặp lại code trong đó
-include_once: gộp file bài 30 vào bài 36, tuy nhiên khi gọi nhiều lần thì include_once chỉ lấy đoạn code đầu tiên thôi
*/
/*ĐIỂM KHÁC NHAU GIỮA INCLUDE VÀ REQUIRE
require: khi ta gộp file bài 30 vào bài 36, nếu code bài 30 bị lỗi, thì khi gộp vào bài 36 nó sẽ dừng toàn bộ 2 file và báo lỗi
include: khi ta gộp file bài 30 vào bài 36, nếu code bài 30 thì lỗi,  thì nó sẽ báo lỗi chỗ bị lỗi, code của bài 36 vẫn chạy bth
*/

?>