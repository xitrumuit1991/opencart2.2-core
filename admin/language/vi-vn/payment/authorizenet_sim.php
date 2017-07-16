<?php
// Heading
$_['heading_title']      = 'Authorize.Net (AIM)';

// Text 
$_['text_payment']       = 'Thanh Toán';
$_['text_success']       = 'Thành Công: Bạn đã thay đổi thông tin tài khoản Authorize.Net (AIM)!';
$_['text_edit']                     = 'Edit Authorize.Net (SIM)';
$_['text_authorizenet_sim']			= '<a onclick="window.open(\'http://reseller.authorize.net/application/?id=5561103\');"><img src="view/image/payment/authorizenet.png" alt="Authorize.Net" title="Authorize.Net" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant']     = 'Merchant ID:';
$_['entry_key']          = 'Khóa giao dịch:';
$_['entry_callback']     = 'Phản hồi từ URL:<br /><span class="help">Vui lòng đăng nhập và thiết lập lại tại <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.</span>';
$_['entry_md5']						= 'MD5 Hash Value';
$_['entry_test']         = 'Chế độ kiểm tra:';
$_['entry_total']        = 'Tổng cộng:<br /><span class="help">Kiểm tra tất cả các đơn hàng trước khi thanh toán được kích hoạt.</span>';
$_['entry_order_status'] = 'Trạng thái đơn hàng:';
$_['entry_geo_zone']     = 'Vùng tính thuế';
$_['entry_status']       = 'Trạng thái:'; 
$_['entry_sort_order']   = 'Sắp xếp đơn hàng:';

// Help
$_['help_callback']					= 'Please login and set this at <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.';
$_['help_md5']						= 'The MD5 Hash feature enables you to authenticate that a transaction response is securely received from Authorize.Net.Please login and set this at <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.(Optional)';
$_['help_total']					= 'The checkout total the order must reach before this payment method becomes active.';
// Error 
$_['error_permission']   = 'Cảnh báo:Bạn không có quyền sửa đổi thanh toán Authorize.Net (AIM)!';
$_['error_merchant']     = 'Yêu cầu ID đăng nhập!';
$_['error_key']          = 'Yêu cầu khóa giao dịch!';
?>