<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => 'Name',
    'column.guard_name' => 'Guard Name',
    'column.roles' => 'Roles',
    'column.permissions' => 'Permissions',
    'column.updated_at' => 'Updated At',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'Name',
    'field.guard_name' => 'Guard Name',
    'field.permissions' => 'Permissions',
    'field.select_all.name' => 'Select All',
    'field.select_all.message' => 'Enable all Permissions currently <span class="text-primary font-medium">Enabled</span> for this role',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    'nav.group' => 'Filament Shield',
    'nav.role.label' => 'Roles',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'Role',
    'resource.label.roles' => 'Roles',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'Entities',
    'resources' => 'Resources',
    'widgets' => 'Widgets',
    'pages' => 'Pages',
    'custom' => 'Custom Permissions',

    /*
    |--------------------------------------------------------------------------
    | Role Setting Page
    |--------------------------------------------------------------------------
    */
    
    'page' => [
        'name' => 'Shield Settings',
        'icon' => 'heroicon-o-adjustments',
        'save' => 'Save',
        'generate' => 'Save & Generate',
        'load_default_settings' => 'Load Default Settings',
        'cancel' => 'Cancel',
    ],
    'labels.super_admin.toggle_input' => 'Super Admin Role',
    'labels.super_admin.text_input' => 'Role Name',
    'labels.filament_user.toggle_input' => 'Filament User Role',
    'labels.filament_user.text_input' => 'Role Name',
    'labels.role_policy.toggle_input' => 'Role Policy Registered?',
    'labels.role_policy.message' => 'Ensure the policy is registered and the permissions are enforced',
    'labels.permission_prefixes.placeholder' => 'Default Permission Prefixes',
    'labels.permission_prefixes.resource' => 'Resource',
    'labels.permission_prefixes.resource.placeholder' => 'Add or Remove Resource Permissions...',
    'labels.permission_prefixes.page' => 'Page',
    'labels.permission_prefixes.widget' => 'Widget',
    'labels.entities.placeholder' => 'Entity Permission Generators & Tabs',
    'labels.entities.message' => 'Generators & Tabs are ',
    'labels.entities.resources' => 'Resources',
    'labels.entities.pages' => 'Pages',
    'labels.entities.widgets' => 'Widgets',
    'labels.entities.custom_permissions' => 'Custom Permissions',
    'labels.entities.custom_permissions.message' => 'Tab is ',
    'labels.status.enabled' => 'Enabled',
    'labels.status.disabled' => 'Disabled',
    'labels.status.yes' => 'Yes',
    'labels.status.no' => 'No',
    'labels.exclude.placeholder' => 'Exclusion Mode',
    'labels.exclude.message' => 'By Enabling the Exclusion Mode you can instruct permission generator to skip creating permissions for the entities you select.',
    'labels.exclude.resources' => 'Resources',
    'labels.exclude.resources.placeholder' => 'Select resources ...',
    'labels.exclude.pages' => 'Pages',
    'labels.exclude.pages.placeholder' => 'Select pages ...',
    'labels.exclude.widgets' => 'Widgets',
    'labels.exclude.widgets.placeholder' => 'Select widgets ...',
    'labels.generator_option' => 'Generator Option',
    'labels.generator_option.policies_and_permissions' => 'Generate Policies & Permissions',
    'labels.generator_option.policies' => 'Generate only Policies',
    'labels.generator_option.permissions' => 'Generate only Permissions',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'You do not have permission to access',
    'update' => 'Shield\'s config updated!',
    'generate' => 'Updated Shield\'s config & Generated Permissions and/or Policies based on the new config.',
    'loaded_default_settings' => 'Loaded Shield\'s default settings.',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'View',
        'view_any' => 'View Any',
        'create' => 'Create',
        'update' => 'Update',
        'delete' => 'Delete',
        'delete_any' => 'Delete Any',
        'force_delete' => 'Force Delete',
        'force_delete_any' => 'Force Delete Any',
        'restore' => 'Restore',
        'restore_any' => 'Restore Any',
    ]
];
