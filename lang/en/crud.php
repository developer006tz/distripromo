<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'attach' => 'Attach',
        'detach' => 'Detach',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'media_platforms' => [
        'name' => 'Media Platforms',
        'index_title' => 'SocialMediaPlatforms List',
        'new_title' => 'New Social media platform',
        'create_title' => 'Create SocialMediaPlatform',
        'edit_title' => 'Edit SocialMediaPlatform',
        'show_title' => 'Show SocialMediaPlatform',
        'inputs' => [
            'name' => 'Name',
            'image' => 'Image',
            'status' => 'Status',
        ],
    ],

    'services' => [
        'name' => 'Services',
        'index_title' => 'Services List',
        'new_title' => 'New Service',
        'create_title' => 'Create Service',
        'edit_title' => 'Edit Service',
        'show_title' => 'Show Service',
        'inputs' => [
            'social_media_platform_id' => 'Social Media Platform',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'image' => 'Image',
        ],
    ],

    'payment_providers' => [
        'name' => 'Payment Providers',
        'index_title' => 'Vendors List',
        'new_title' => 'New Vendor',
        'create_title' => 'Create Vendor',
        'edit_title' => 'Edit Vendor',
        'show_title' => 'Show Vendor',
        'inputs' => [
            'name' => 'Name',
            'image' => 'Image',
            'status' => 'Status',
        ],
    ],

    'orders' => [
        'name' => 'Orders',
        'index_title' => 'Orders List',
        'new_title' => 'New Order',
        'create_title' => 'Create Order',
        'edit_title' => 'Edit Order',
        'show_title' => 'Show Order',
        'inputs' => [
            'user_id' => 'User',
            'service_id' => 'Service',
            'profile_link' => 'Profile Link',
            'date' => 'Date',
            'status' => 'Status',
        ],
    ],

    'transactions' => [
        'name' => 'Transactions',
        'index_title' => 'Transactions List',
        'new_title' => 'New Transaction',
        'create_title' => 'Create Transaction',
        'edit_title' => 'Edit Transaction',
        'show_title' => 'Show Transaction',
        'inputs' => [
            'user_id' => 'User',
            'order_id' => 'Order',
            'vendor_id' => 'Vendor',
            'amount' => 'Amount',
            'date' => 'Date',
            'status' => 'Status',
        ],
    ],

    'message_templates' => [
        'name' => 'Message Templates',
        'index_title' => 'Messages List',
        'new_title' => 'New Message',
        'create_title' => 'Create Message',
        'edit_title' => 'Edit Message',
        'show_title' => 'Show Message',
        'inputs' => [
            'body' => 'Body',
            'target_user' => 'Target User',
        ],
    ],

    'compose_messages' => [
        'name' => 'Compose Messages',
        'index_title' => 'SentMessages List',
        'new_title' => 'New Sent message',
        'create_title' => 'Create SentMessage',
        'edit_title' => 'Edit SentMessage',
        'show_title' => 'Show SentMessage',
        'inputs' => [
            'message_id' => 'Message',
            'user_id' => 'User',
            'phone' => 'Phone',
            'status' => 'Status',
            'date' => 'Date',
        ],
    ],

    'manage_users' => [
        'name' => 'Manage Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'role' => 'Role',
            'name' => 'Name',
            'email' => 'Email',
            'image' => 'Image',
            'password' => 'Password',
            'phone' => 'Phone',
        ],
    ],

    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Roles List',
        'create_title' => 'Create Role',
        'edit_title' => 'Edit Role',
        'show_title' => 'Show Role',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],
];
