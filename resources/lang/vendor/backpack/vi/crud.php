<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new'         => 'Lưu và tạo mới',
    'save_action_save_and_edit'        => 'Lưu và chỉnh sửa mục này',
    'save_action_save_and_back'        => 'Lưu và quay lại',
    'save_action_save_and_preview'     => 'Lưu và xem trước',
    'save_action_changed_notification' => 'Hành vi mặc định sau khi lưu đã được thay đổi.',

    // Create form
    'add'                 => 'Thêm ',
    'back_to_all'         => 'Quay lại tất cả',
    'cancel'              => 'Huỷ bỏ',
    'add_a_new'           => 'Thêm mới',

    // Edit form
    'edit'                 => 'Chỉnh sửa',
    'save'                 => 'Lưu',

    // Translatable models
    'edit_translations' => 'Dịch',
    'language'          => 'Ngôn ngữ',

    // CRUD table view
    'all'                       => 'Tất cả ',
    'in_the_database'           => 'trong cơ sở dữ liệu',
    'list'                      => 'Danh sách',
    'reset'                     => 'Làm mới',
    'actions'                   => 'Hành động',
    'preview'                   => 'Xem trước',
    'delete'                    => 'Xóa bỏ',
    'admin'                     => 'Quản trị viên',
    'details_row'               => 'Đây là hàng chi tiết. Sửa đổi theo ý bạn.',
    'details_row_loading_error' => 'Đã xảy ra lỗi khi tải thông tin chi tiết. Làm ơn hãy thử lại.',
    'clone'                     => 'Sao chép',
    'clone_success'             => '<strong>Đã nhân bản mục nhập</strong><br>Một mục mới đã được thêm vào, có cùng thông tin với mục này.',
    'clone_failure'             => '<strong>Sao chép không thành công</strong><br>Không thể tạo mục nhập mới. Vui lòng thử lại.',

    // Confirmation messages and bubbles
    'delete_confirm'                              => 'bạn có chắc bạn muốn xóa mục này?',
    'delete_confirmation_title'                   => 'Mục đã Xóa',
    'delete_confirmation_message'                 => 'Mục đã được xóa thành công.',
    'delete_confirmation_not_title'               => 'KHÔNG bị xóa',
    'delete_confirmation_not_message'             => "Đã xảy ra lỗi. Mục của bạn có thể chưa bị xóa.",
    'delete_confirmation_not_deleted_title'       => 'KHÔNG bị xóa',
    'delete_confirmation_not_deleted_message'     => 'Không có chuyện gì xảy ra. Mục của bạn là an toàn.',

    // Bulk actions
    'bulk_no_entries_selected_title'   => 'Không có mục nhập nào được chọn',
    'bulk_no_entries_selected_message' => 'Vui lòng chọn một hoặc nhiều mục để thực hiện hành động hàng loạt đối với chúng.',

    // Bulk delete
    'bulk_delete_are_you_sure'   => 'Bạn có chắc chắn muốn xóa các mục: số này không?',
    'bulk_delete_sucess_title'   => 'Các mục đã bị xóa',
    'bulk_delete_sucess_message' => 'các mục đã bị xóa',
    'bulk_delete_error_title'    => 'Xóa không thành công',
    'bulk_delete_error_message'  => 'Không thể xóa một hoặc nhiều mục',

    // Bulk clone
    'bulk_clone_are_you_sure'   => 'Bạn có chắc chắn muốn sao chép các :number số này không? ',
    'bulk_clone_sucess_title'   => 'Các mục được nhân bản',
    'bulk_clone_sucess_message' => 'đã được nhân bản.',
    'bulk_clone_error_title'    => 'Sao chép không thành công',
    'bulk_clone_error_message'  => 'Không thể tạo một hoặc nhiều mục nhập. Vui lòng thử lại.',

    // Ajax errors
    'ajax_error_title' => 'lỗi',
    'ajax_error_text'  => 'Lỗi khi tải trang. Vui lòng làm mới trang.',

    // DataTables translation
    'emptyTable'     => 'Không có dữ liệu trong bảng',
    'info'           => 'Showing _START_ to _END_ of _TOTAL_ entries',
    'infoEmpty'      => 'No entries',
    'infoFiltered'   => '(filtered from _MAX_ total entries)',
    'infoPostFix'    => '.',
    'thousands'      => ',',
    'lengthMenu'     => '_MENU_ entries per page',
    'loadingRecords' => 'Đang tải...',
    'processing'     => 'Đang thực hiện...',
    'search'         => 'Tìm kiếm    ',
    'zeroRecords'    => 'Không tìm thấy mục nhập phù hợp',
    'paginate'       => [
        'first'    => 'Đầu tiên',
        'last'     => 'Cuối cùng',
        'next'     => 'Kế tiếp',
        'previous' => 'Trước',
    ],
    'aria' => [
        'sortAscending'  => ': kích hoạt để sắp xếp cột tăng dần',
        'sortDescending' => ': kích hoạt để sắp xếp cột giảm dần',
    ],
    'export' => [
        'export'            => 'Xuất',
        'copy'              => 'Sao chép',
        'excel'             => 'Excel',
        'csv'               => 'CSV',
        'pdf'               => 'PDF',
        'print'             => 'In',
        'column_visibility' => 'Khả năng hiển thị của cột',
    ],

    // global crud - errors
    'unauthorized_access' => 'Truy cập trái phép - bạn không có quyền cần thiết để xem trang này.',
    'please_fix'          => 'Vui lòng sửa các lỗi sau:',

    // global crud - success / error notification bubbles
    'insert_success' => 'Mục đã được thêm thành công.',
    'update_success' => 'Mục đã được sửa đổi thành công.',

    // CRUD reorder view
    'reorder'                      => 'Sắp xếp lại',
    'reorder_text'                 => 'Sử dụng kéo và thả để sắp xếp lại.',
    'reorder_success_title'        => 'Làm xong',
    'reorder_success_message'      => 'Đơn đặt hàng của bạn đã được lưu.',
    'reorder_error_title'          => 'lỗi',
    'reorder_error_message'        => 'Đơn đặt hàng của bạn chưa được lưu.',

    // CRUD yes/no
    'yes' => 'Có',
    'no'  => 'Không',

    // CRUD filters navbar view
    'filters'        => 'Bộ lọc',
    'toggle_filters' => 'Chuyển đổi bộ lọc',
    'remove_filters' => 'xóa bộ lọc',
    'apply' => 'Ứng dụng',

    //filters language strings
    'today' => 'Today',
    'yesterday' => 'Yesterday',
    'last_7_days' => 'Last 7 Days',
    'last_30_days' => 'Last 30 Days',
    'this_month' => 'This Month',
    'last_month' => 'Last Month',
    'custom_range' => 'Custom Range',
    'weekLabel' => 'W',

    // Fields
    'browse_uploads'            => 'Duyệt và tải lên',
    'select_all'                => 'Chọn tất cả',
    'select_files'              => 'Select files',
    'select_file'               => 'Select file',
    'clear'                     => 'Xóa',
    'page_link'                 => 'Page link',
    'page_link_placeholder'     => 'http://example.com/your-desired-page',
    'internal_link'             => 'Internal link',
    'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
    'external_link'             => 'External link',
    'choose_file'               => 'Choose file',
    'new_item'                  => 'New Item',
    'select_entry'              => 'Select an entry',
    'select_entries'            => 'Select entries',

    //Table field
    'table_cant_add'    => 'Cannot add new :entity',
    'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'Quản lý tập tin',

    // InlineCreateOperation
    'related_entry_created_success' => 'Mục nhập liên quan đã được tạo và chọn.',
    'related_entry_created_error' => 'Không thể tạo mục nhập có liên quan.',

    // returned when no translations found in select inputs
    'empty_translations' => '(empty)',
];
