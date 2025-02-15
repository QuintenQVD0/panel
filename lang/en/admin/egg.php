<?php

return [
    'nav_title' => 'Eggs',
    'model_label' => 'Egg',
    'model_label_plural' => 'Eggs',
    'tabs' => [
        'configuration' => 'Configuration',
        'process_management' => 'Process Management',
        'egg_variables' => 'Egg Variables',
        'install_script' => 'Install Script',
    ],
    'import' => [
        'file' => 'File',
        'url' => 'URL',
        'egg_help' => 'This should be the raw .json file ( egg-minecraft.json )',
        'url_help' => 'URLs must point directly to the raw .json file',
        'import_failed' => 'Import Failed',
        'import_success' => 'Import Success',
    ],
    'in_use' => 'In Use',
    'servers' => 'Servers',
    'name' => 'Name',
    'egg_uuid' => 'Egg UUID',
    'egg_id' => 'Egg ID',
    'name_help' => 'A simple, human-readable name to use as an identifier for this Egg.',
    'author' => 'Author',
    'uuid_help' => 'This is the globally unique identifier for this Egg which Wings uses as an identifier.',
    'author_help' => 'The author of this version of the Egg.',
    'author_help_edit' => 'The author of this version of the Egg. Uploading a new configuration from a different author will change this.',
    'description' => 'Description',
    'description_help' => 'A description of this Egg that will be displayed throughout the Panel as needed.',
    'startup' => 'Startup Command',
    'startup_help' => 'The default startup command that should be used for new servers using this Egg.',
    'file_denylist' => 'File Denylist',
    'file_denylist_help' => 'A list of files that the end user is not allowed to edit.',
    'features' => 'Features',
    'force_ip' => 'Force Outgoing IP',
    'force_ip_help' => 'Forces all outgoing network traffic to have its Source IP NATed to the IP of the server\'s primary allocation IP. Required for certain games to work properly when the Node has multiple public IP addresses. Enabling this option will disable internal networking for any servers using this Egg, causing them to be unable to internally access other servers on the same node.',
    'tags' => 'Tags',
    'update_url' => 'Update URL',
    'update_url_help' => 'URLs must point directly to the raw .json file',
    'add_image' => 'Add Docker Image',
    'docker_images' => 'Docker Images',
    'docker_name' => 'Image Name',
    'docker_uri' => 'Image URI',
    'docker_help' => 'The docker images available to servers using this Egg.',

    'stop_command' => 'Stop Command',
    'stop_command_help' => 'The command that should be sent to server processes to stop them gracefully. If you need to send a SIGINT you should enter ^C here.',
    'copy_from' => 'Copy Settings From',
    'copy_from_help' => 'If you would like to default to settings from another Egg select it from the menu above.',
    'none' => 'None',
    'start_config' => 'Start Configuration',
    'start_config_help' => 'List of values the daemon should be looking for when booting a server to determine completion.',
    'config_files' => 'Configuration Files',
    'config_files_help' => 'This should be a JSON representation of configuration files to modify and what parts should be changed.',
    'log_config' => 'Log Configuration',
    'log_config_help' => 'This should be a JSON representation of where log files are stored, and whether or not the daemon should be creating custom logs.',

    'environment_variable' => 'Environment Variable',
    'default_value' => 'Default Value',
    'user_permissions' => 'User Permissions',
    'viewable' => 'Viewable',
    'editable' => 'Editable',
    'rules' => 'Rules',
    'add_new_variable' => 'Add New Variable',

    'error_unique' => 'A variable with this name already exists.',
    'error_required' => 'The environment variable field is required.',
    'error_reserved' => 'This environment variable is reserved and cannot be used.',

    'script_from' => 'Script From',
    'script_container' => 'Script Container',
    'script_entry' => 'Script Entry',
    'script_install' => 'Install Script',
    'no_eggs' => 'No Eggs',
    'no_servers' => 'No Servers',
    'no_servers_help' => 'No Servers are assigned to this Egg.',

    'update' => 'Update',
    'updated' => 'Egg updated',
    'update_failed' => 'Egg Update Failed',
    'update_question' => 'Are you sure you want to update this egg?',
    'update_description' => 'If you made any changes to the egg they will be overwritten!',
];
