# Allow Minor Core Updates Only

A simple WordPress MU-plugin that enables automatic minor core updates while disabling automatic updates for major core updates, plugins, and themes.

## Overview

"Allow Minor Core Updates Only" is designed for users who want to maintain a stable WordPress environment by ensuring that only minor updates (typically security and maintenance releases) are applied automatically. All other automatic update features—for major core updates, plugins, and themes—are disabled, giving you full control over when and how these are updated.

## Features

- **Automatic Minor Core Updates:**  
  Enables automatic updates for minor releases of WordPress core.

- **Disable Automatic Major Core Updates:**  
  Prevents automatic updates for major WordPress core releases.

- **Disable Plugin and Theme Auto-Updates:**  
  Stops automatic updates for all plugins and themes.

- **MU-Plugin Compatible:**  
  Can be installed as a Must-Use plugin, ensuring it is always active without manual activation via the dashboard.

## Installation

### As an MU-Plugin

1. **Create or Locate the MU-Plugins Folder:**  
   Ensure that you have a `mu-plugins` folder in your `wp-content` directory. If it doesn't exist, create it:
   ```bash
   mkdir wp-content/mu-plugins

