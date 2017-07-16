<?php
// Heading
$_['heading_title']      = 'SagePay Direct';

// Text 
$_['text_payment']       = 'Thanh Toán'; 
$_['text_success']       = 'Thành Công: Bạn đã thay đổi chi tiết tài khoản SagePay!';
$_['text_edit']                     = 'Edit SagePay Direct';
$_['text_sagepay']       = '<a onclick="window.open(\'https://support.sagepay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61\');"><img src="view/image/payment/sagepay.png" alt="SagePay" title="SagePay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sagepay_direct']			= '<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61" target="_blank"><img src="view/image/payment/sagepay.png" alt="SagePay" title="SagePay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']           = 'Simulator';
$_['text_test']          = 'Kiểm tra';
$_['text_live']          = 'Sống';
$_['text_defered']					= 'Defered';
$_['text_authenticate']				= 'Authenticate';
$_['text_release_ok']				= 'Release was successful';
$_['text_release_ok_order']			= 'Release was successful, order status updated to success - settled';
$_['text_rebate_ok']				= 'Rebate was successful';
$_['text_rebate_ok_order']			= 'Rebate was successful, order status updated to rebated';
$_['text_void_ok']					= 'Void was successful, order status updated to voided';
$_['text_payment_info']				= 'Payment information';
$_['text_release_status']			= 'Payment released';
$_['text_void_status']				= 'Payment voided';
$_['text_rebate_status']			= 'Payment rebated';
$_['text_order_ref']				= 'Order ref';
$_['text_order_total']				= 'Total authorised';
$_['text_total_released']			= 'Total released';
$_['text_transactions']				= 'Transactions';
$_['text_column_amount']			= 'Amount';
$_['text_column_type']				= 'Type';
$_['text_column_date_added']		= 'Created';
$_['text_confirm_void']				= 'Are you sure you want to void the payment?';
$_['text_confirm_release']			= 'Are you sure you want to release the payment?';
$_['text_confirm_rebate']			= 'Are you sure you want to rebate the payment?';
$_['text_payment']       = 'Thanh Toán';
$_['text_defered']       = 'Đã trì hoãn';
$_['text_authenticate']  = 'Xác thực';

// Entry
$_['entry_vendor']       = 'Vendor:';
$_['entry_test']         = 'Chế độ kiểm tra:';
$_['entry_transaction']  = 'Chế độ giao dịch:';
$_['entry_total']        = 'Tổng cộng:<br /><span class="help">Kiểm tra tất cả các đơn hàng trước khi thanh toán được kích hoạt.</span>';
$_['entry_order_status'] = 'Trạng thái đơn hàng:';
$_['entry_geo_zone']     = 'Vùng tính thuế';
$_['entry_status']       = 'Trạng thái:';
$_['entry_sort_order']   = 'Sắp xếp đơn hàng:';
$_['entry_debug']					= 'Debug logging';
$_['entry_card']					= 'Store Cards';
$_['entry_cron_job_token']			= 'Secret Token';
$_['entry_cron_job_url']			= 'Cron Job\'s URL';
$_['entry_last_cron_job_run']		= 'Last cron job\'s run time:';

// Help
$_['help_total']					= 'The checkout total the order must reach before this payment method becomes active.';
$_['help_debug']					= 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$_['help_transaction']				= 'Transaction method MUST be set to Payment to allow subscription payments';
$_['help_cron_job_token']			= 'Make this long and hard to guess';
$_['help_cron_job_url']				= 'Set a cron job to call this URL';

// Button
$_['btn_release']					= 'Release';
$_['btn_rebate']					= 'Rebate / refund';
$_['btn_void']						= 'Void';

// Error
$_['error_permission']   = 'Cảnh báo:Bạn không có quyền sửa đổi thanh toán SagePay!';
$_['error_vendor']       = 'Yêu cầu Vendor ID!';
?>