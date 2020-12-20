<?php $head['title'] = 'Xfce 4.16 Changelog'; ?>

<h1>Xfce 4.16 Changelog</h1>

<p>Note: the changelogs shown here are since the version of the components that shipped with Xfce 4.14.</p>

<h2>Dependency changes</h2>
<ul>
  <li>Gtk &gt;= 3.22, GLib &gt;= 2.50 and GDBus.</li>
  <li>Add libgtop</li>
  <li>Remove Gtk2 support</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Add several helpers to gather release notes etc and actually perform releases</li>
  <li>Add xfce-build Docker container (which is also used in GitLab CI)</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Update configure.ac.in syntax</li>
  <li>Namespace of the gir needs capital first letter</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>remove typedef already defined by G_DECLARE_FINAL_TYPE macro (fixes #4)</li>
  <li>Complete the field codes expansion</li>
  <li>docs: Unhide the misc utils section</li>
  <li>Add field codes expansion and related utilities</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
  <li>Bump libepoxy version to 1.2</li>
  <li>Drop support for Gtk2</li>
  <li>Bump gtk to 3.22 (Bug #15781)</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Make glibtop an optional dependency</li>
  <li>Namespace of the gir needs capital first letter</li>
  <li>about: Revamp About Xfce tab</li>
  <li>about: Add xfce version and vendor info</li>
  <li>about: Add system info tab</li>
  <li>about: Hide system tab conditionally</li>
  <li>about: Use more understandable arch labels (Issue #27)</li>
  <li>about: Print GPU name in system info</li>
  <li>about: Support multiple GPUs and print GPU memory size</li>
  <li>about: Drop window subtitle</li>
  <li>shortcut-dialog Improve UI for setting shortcuts</li>
  <li>shortcut-dialog: Add label to clear button</li>
  <li>shortcut-dialog: Port to new XfceTitledDialog API</li>
  <li>shortcut-dialog: Only grab keyboard</li>
  <li>shortcut-dialog: Show dialog content (Bug #16338)</li>
  <li>shortcuts: Also map Homepage to browser</li>
  <li>shortcuts: Remove calculator shortcut</li>
  <li>shortcuts: Replace xfrun4 by xfce4-appfinder</li>
  <li>XfceTitledDialog: Move buttons from headerbar to actionarea</li>
  <li>Switch XfceTitledDialog to headerbar layout</li>
  <li>XfceTitledDialog: Add _create_action_area, _add_button and _add_action_widget</li>
  <li>XfceTitledDialog: Make sure windows can be dragged</li>
  <li>XfceTitledDialog: Also repack xfce_titled_dialog_new</li>
  <li>XfceTitledDialog: Keep buttons in the action area</li>
  <li>Mark xfce_titled_dialog_new_with_buttons as deprecated</li>
  <li>tests: Improve UI</li>
  <li>xfce-dialogs: Improve layout of confirm_close_tabs</li>
  <li>xfce-dialogs: Add right margin back to labels</li>
  <li>xfce-dialogs: Drop default window titles</li>
  <li>xfce-dialogs: Improve alignment and layout of dialogs</li>
  <li>xfce-dialogs: Use GtkMessageDialog as base class</li>
  <li>dialogs: Use symbolic window-close icon</li>
  <li>tests: Add xfce_dialog_confirm_close_tabs</li>
  <li>tests: Add icons to dialog buttons</li>
  <li>tests: Simplify code by using XfceTitledDialog</li>
  <li>tests: Re-order buttons</li>
  <li>Rename test-ui-gtk3 to test-ui</li>
  <li>Introduce xfce_spawn and xfce_spawn_command_line</li>
  <li>Add xfce_has_gtk_frame_extents to better handle CSD</li>
  <li>Add two new functions to search for app icons</li>
  <li>Remove hardcoded translators list</li>
  <li>Always perform sanity check</li>
  <li>Add default shortcuts for tiling (Fixes #4)</li>
  <li>Avoid checking for epoxy if libgtop is disabled</li>
  <li>XfceTitledDialog: Fix erroneous check (Fixes #30)</li>
  <li>No startup notification in wayland to prevent crash (Issue #17)</li>
  <li>Display userspace bitness if it differs from OS kernel bitness</li>
  <li>Improve xfce_icon_name API</li>
  <li>Avoid redundant key re-grabbing</li>
  <li>Silence compiler warnings (Fixes #25)</li>
  <li>AC_CONFIG_MACRO_DIR → AC_CONFIG_MACRO_DIRS</li>
  <li>Avoid shortening the keycodes GArray while walking it.</li>
  <li>Always return GTK_RESPONSE_OK for accepted shortcut keys (fixes #20)</li>
  <li>Replace deprecated 'gdk_keyboard_ungrab' function (Fixes #15)</li>
  <li>shortcuts-grabber: Correctly ungrab keys on updating shortcuts (Fixes #16)</li>
  <li>Add "xfce_gtk_accel_group_disconnect_action_entries" to be able to revert "xfce_gtk_accel_group_connect_action_entries"</li>
  <li>Allow more granular control over menu item accelerators. - No automatic accelerator activation formenu items - Added 'gtk_menu_item_set_accel_label' - Added 'xfce_gtk_accel_group_connect_action_entries'</li>
  <li>renamed 'xfce_gtk_accel_group_append' to 'xfce_gtk_accel_map_add_entries' and modified internals accoringly. - No automatic add to an accel_group any more, since this may lead to double-activation in some cases.</li>
  <li>Add title to xfce_dialog_confirm_close_tabs</li>
  <li>Add more default keyboard shortcuts (Bug #16470)</li>
  <li>removed some superfluous 'gtk_widget_show()' in order to be consistent with GTK creation methods.</li>
  <li>Usage of g_warning instead of g_error on unknown action_id in 'xfce_gtk_get_action_entry_by_id'</li>
  <li>Enabled doc generation for XfceGtkActionEntry and related methods</li>
  <li>Enabled doc generation for new widget 'xfce-filename-input'</li>
  <li>Fixed two "Missing (transfer) annotation" warnings</li>
  <li>Added methods to replace deprecated GtkAction, GtkActionEntry and GtkUiManager in order to keep simple menu creation</li>
  <li>Add a widget for filename input (Bug #16542)</li>
  <li>Switch Ctrl+Alt+Del to xfce4-session-logout (Bug #11979)</li>
  <li>Always provides needed files for vala binding in dist tarball</li>
  <li>Drop xfce-header from pot files</li>
  <li>Drop gladeui Gtk2 from distcheck options</li>
  <li>Introduce xfce_titled_dialog_set_default_response</li>
  <li>Fix license text box too small (Bug #16259)</li>
  <li>Fix typo in test-ui.c (Bug #16253)</li>
  <li>system-info: Clean up code and UI</li>
  <li>Fix Window has not been made visible when grabbing keyboard (Bug #16054)</li>
  <li>Do not use gdk_screen_get_monitor_at_point (Bug #15781)</li>
  <li>Replace gtk_show_uri (Bug #15781)</li>
  <li>Replace gdk_display_get_screen (Bug #15781)</li>
  <li>Replace gdk_keymap_get_default (Bug #15781)</li>
  <li>Replace deprecated device functions (Bug #15781)</li>
  <li>Replace gdk_error_trap_* and gdk_flush (Bug #15781)</li>
  <li>Ignore what is hard to replace (Bug #15781)</li>
  <li>Add a dialog to confirm closure of multiple tabs (bug #15873)</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Adjust padding only for vertical item orientation (Issue #48)</li>
  <li>bump glib (and gio, gthread, etc) to 2.50.0</li>
  <li>Fix GCC warning (false negative)</li>
  <li>Re-grab tree selection to prevent rare crash (Issue #46)</li>
  <li>Remove unneeded RTL adjustment (Issue #45)</li>
  <li>exo-open: Wrap long URI in error dialog (Issue #26)</li>
  <li>Avoid truncated text in small zoom levels (#42)</li>
  <li>Make ExoIconView reduce selection on a single click (issue #39)</li>
  <li>Partially restore 6fcefce9 (Issue #18)</li>
  <li>Add check for valid GtkTreeSelection (issue #40)</li>
  <li>Reset cursor on drag end in single-click mode</li>
  <li>exo-open: Change priority of command line parameters (Fixes #20)</li>
  <li>Prevent label from overlapping icon in RTL (Fixes #36)</li>
  <li>Prevent "selection_changed" bursts (#37)</li>
  <li>Small change to documentation for exo_strdup_strftime</li>
  <li>desktop-item-edit: Use new XfceTitledDialog API</li>
  <li>desktop-item-edit: Fix fallback for desktop file type detection</li>
  <li>desktop-item-edit: Fix sensitivity of save button (Fixes #28)</li>
  <li>desktop-item-edit: Improve detection of invalid icon names (Fixes #33)</li>
  <li>desktop-item-edit: Fix sensitivity of save button (Bug #16813)</li>
  <li>AC_CONFIG_MACRO_DIR → AC_CONFIG_MACRO_DIRS (Closes !9)</li>
  <li>Remove unused perl module requirement</li>
  <li>Replace bugzilla occurences with gitlab (fixes #30)</li>
  <li>icon-chooser-dialog: Allow removing selected icon (fixes #2)</li>
  <li>Fix build on OpenBSD (!2)</li>
  <li>Drop exo-csource from exo</li>
  <li>Rework exo_icon_view_scroll_event to allow overshoot effect (fixes #25)</li>
  <li>Allow resizing the xfce4-settings window smaller (fixes #19)</li>
  <li>exo-29: Fix race condition in make install</li>
  <li>state variable is a GtkStateFlags</li>
  <li>Fix make warnings since gtk2 drop</li>
  <li>Drop GTK2 support. This means the following features are no longer part of the API: ExoCellRendererEllipsizedText, ExoIconBar, ExoToolbarsEditor, ExoToolbarsEditorDialog, ExoToolbarsModel, ExoToolbarsView, ExoWrapTable, ExoXsessionClient</li>
  <li>Fallback without xfce4-mime-helper</li>
  <li>Drop exo_atomic_{inc,dec}</li>
  <li>Attach popup window to toplevel parent (Bug #16768)</li>
  <li>Rename Thunar.desktop to thunar.desktop (Bug #16197)</li>
  <li>Extend selection on shift+drag (Bug #7526)</li>
  <li>Do not cancel selection on shift+drag</li>
  <li>Rename Thunar.desktop to thunar.desktop (Bug #16197)</li>
  <li>Fix type declaration (Bug #16678)</li>
  <li>Fix GTimeVal deprecation</li>
  <li>Replace deprecated G_INLINE_FUNC macro</li>
  <li>Replace deprecated macro</li>
  <li>Wrong keyboard navigation after using rubberband in exo-icon-view (Bug #16286)</li>
  <li>Cursor position in icon view not visible/highlighted when using Ctrl + arrows (Bug #12227)</li>
  <li>Make sure default applications are properly set in mimeapps.list</li>
  <li>exo-helper: Add gio-unix-2.0 dependency</li>
  <li>Fix for the bugs 16075 and 16107</li>
  <li>Fix cursor missing in search popup widget (bug #16068)</li>
  <li>Fix prelight deactivation (bug #11806)</li>
  <li>Fix desktop item creation on symbolic link directories, make user-created launchers executable by default</li>
  <li>Fix issues with displaying icon view contents (bug #14737)</li>
  <li>Remove dependency on gio-unix-2.0 (bug #15825)</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>
  <li>Drop support for Gtk2</li>
  <li>relax automake requirement to 1.15</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Use the symbolic close icon in the error dialog</li>
  <li>Don't launch apps as children</li>
  <li>Add new icon needed for xfce4-about-dialog</li>
  <li>Fix missing transfer annotation</li>
  <li>Improve GObject introspection annotations (Fixes #8)</li>
  <li>Add support for GObject Introspection (Fixes #4)</li>
  <li>Field codes expansion API update</li>
  <li>Transfer some code to libxfce4util</li>
  <li>Fix default merge rules in xfce-applications.menu (Bug #15504)</li>
  <li>Fix a stupid typo introduced in previous commit</li>
  <li>Rename exo-helpers to the new xfce4-xx ones</li>
  <li>Do not add INSTALL in dist tarball</li>
  <li>Fix a memory leak</li>
  <li>Switch to xfce_gtk_image_menu_item</li>
  <li>Add garcon_menu_item_[g|s]et_keywords to docs</li>
  <li>Add garcon_gtk_menu_get_desktop_actions_menu</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Launch application reparenting them to init</li>
  <li>Bump gtk minimum version to 3.22.0</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Sort by frecency (Bug #9265)</li>
  <li>Add small delay before reloading menu tree (!6)</li>
  <li>Add new app icon and switch to rDNS</li>
  <li>Add keywords to .desktop files to xfce4-appfinder</li>
  <li>Switch to a few symbolic icons</li>
  <li>Clear entry's error icon and tooltip</li>
  <li>Remove unnecessary code for unsupported glib versions</li>
  <li>Remove padding from context menu</li>
  <li>Fix memory leaks when sorting items</li>
  <li>Simplify buttons layout</li>
  <li>Drop close button</li>
  <li>Fix Makefile for scalable to use svg</li>
  <li>Use shared field codes expansion</li>
  <li>Limit popup completion width to be same as entry</li>
  <li>Record last commands only once (Bug #15767)</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Make Preferences button always visible (Bug #16489)</li>
  <li>Fix gtk version checking</li>
  <li>Hidden option to disable entry completion (Bug #15827)</li>
  <li>Use casefolded string when searching for apps not commands (Bug #15893)</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Bump GLib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Add dependency to python</li>
  <li>settings-manager: Correctly show/hide the filterbar</li>
  <li>settings-manager: Switch to GtkSearchEntry</li>
  <li>settings-manager: Put filter in separate bar (Fixes #226)</li>
  <li>settings-manager: Simplify redrawing of search results (Fixes #141)</li>
  <li>settings-manager: Hide filter entry in plugged dialogs</li>
  <li>settings-manager: Ensure searchbox has initial focus (Bug #16890)</li>
  <li>settings-manager: Fix XfceTitledDialog layout with CSD</li>
  <li>settings-manager: Drop setting the old header style</li>
  <li>settings-manager: Make sure content determines size</li>
  <li>settings-manager: Use symbolic find/clear icons</li>
  <li>settings-manager: Improve search by including keywords (Bug #10694)</li>
  <li>settings-manager: Show min and max buttons</li>
  <li>mime: Merge in exo-preferred-applications</li>
  <li>mime: Add 'Open with...' button</li>
  <li>mime: Accept Thunar's old id name (Fixes #247)</li>
  <li>mime: Rename dialog and icon to 'Default Applications'</li>
  <li>mime: Add new generic launcher icons</li>
  <li>mime: Add close and help button icons</li>
  <li>mime: Fix double free</li>
  <li>mime: Fix Nautilus icon name</li>
  <li>mime: Fix window icon name</li>
  <li>mime: Rename Thunar to thunar</li>
  <li>settings-editor: Fix scrollbar for channels</li>
  <li>settings-editor: Point to correct docs URL (#245)</li>
  <li>keyboard: Improve inline toolbar alignment</li>
  <li>keyboard: Make 'system defaults' a GtkSwitch</li>
  <li>keyboard: Make all table columns sortable</li>
  <li>keyboard: Adjust width of shortcut column (Fixes #223)</li>
  <li>keyboard: Update dialog UI</li>
  <li>keyboard: Show shortcuts with keycap class</li>
  <li>keyboard: Fix log flood (bug #16521)</li>
  <li>keyboard: Fix crash when editing shortcut (Bug #15958)</li>
  <li>keyboard: Support libxfce4ui XfceTitledDialog new API</li>
  <li>display: Center minimal dialog on monitor where cursor is</li>
  <li>display: Custom scale changes are display changes</li>
  <li>display: Improve layout in settings dialog</li>
  <li>display: Allow resizing of minimal dialog (Bug #15450)</li>
  <li>display: Resize display widget according to scale</li>
  <li>display: Move scaling presets to glade</li>
  <li>display: Set minimum scale to 0.1</li>
  <li>display: Improve state machine for scaling option</li>
  <li>display: Initial fractional scaling support (Fixes #162)</li>
  <li>display: Mark preferred mode with an asterisk</li>
  <li>display: Add init function for aspect ratios</li>
  <li>display: Right-align the display ratio</li>
  <li>display: Fixed warning and removed ratio</li>
  <li>display: Improve look of ratio</li>
  <li>display: Show ratio next to display resolution</li>
  <li>display: Fix icon name for primary indicator</li>
  <li>display: Initialize crtc->scalex/y (Bug #15971)</li>
  <li>appearance: Add 'Add' button to install themes (Fixes #193)</li>
  <li>appearence: Sync theme, icon, font names to gsettings</li>
  <li>appearance: Drop toolbar style setting (Bug #16665)</li>
  <li>appearance: Fix width of DPI spinbutton (Bug #16125)</li>
  <li>appearance: Fix list refresh on DnD (Fixes #213)</li>
  <li>appearance: Only show themes that support Gtk3 (Bug #15849)</li>
  <li>settings-editor: Add labels to toolbar items</li>
  <li>settings-editor: Enable tooltips and ellipsizing for `Value` column</li>
  <li>settings-editor: Add consistent inline-toolbar</li>
  <li>color: Adjust padding of dialog</li>
  <li>color: Add labels to toolbar</li>
  <li>color: Tweak colors  of icon</li>
  <li>color: Fix crash in add-profiles dialog (Bug #15876)</li>
  <li>xfsettingsd: avoid default double fork</li>
  <li>xfsettingsd: Correctly get current xrandr scale</li>
  <li>xfsettingsd: Add --disable-wm-check flag (Bug #16128)</li>
  <li>Replace README file with README.md</li>
  <li>Disable UPower support by default</li>
  <li>Use just binary name (instead of full path) as argument</li>
  <li>Convert xfce4-compose-mail to python</li>
  <li>Expand desktop entry field codes</li>
  <li>Don't crash when upowerd isnt present (bug #60)</li>
  <li>Fix xfconf-related memory leaks</li>
  <li>Switch to new app icons and rDNS icon names</li>
  <li>Increase mouse cursor upper bound for HiDPI (bug #16042)</li>
  <li>exo-compose-email -> xfce4-compose-email</li>
  <li>Fix various alignments and comments</li>
  <li>Drop no-longer-needed XfceMimeHelperChooserDialog</li>
  <li>Bug #16679: Make "Profiles matching" sentence translatable</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Handle failure to get Xkl engine for display (bug #16017)</li>
  <li>Fix GTimeVal deprecation (Bug #16645)</li>
  <li>Fix keywords and mark them  as translateable</li>
  <li>Use proper fallback configuration on "apply" and "toggle off" (Bug #16476)</li>
  <li>Add keywords to .desktop files (Bug #10694)</li>
  <li>Set "gtk-titlebar-middle-click" to "lower" by default</li>
  <li>dialogs: Ensure dialogs have min and max buttons</li>
  <li>Bump libxfce4ui dependency to 4.15.1</li>
  <li>xsettings: Use CSD for GtkDialogs by default</li>
  <li>Ensure the newly labeled 'Xfce Settings Daemon' is translated</li>
  <li>Switch to symbolic window-close icon</li>
  <li>Improve string for session managers</li>
  <li>Do not show translation info on --help output</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Remove xfconf perl binding</li>
  <li>Enable GSettings backend by default</li>
  <li>Initialize Xfconf when the backend is to be used</li>
  <li>Use gsettings as a common channel name</li>
  <li>Add Bash completion for xfconf-query</li>
  <li>Fix make distcheck and enable it on gitlab CI</li>
  <li>xfconf-cache: Fix access to freed data (#16)</li>
  <li>Test for #16</li>
  <li>Disable parallelism on all tests</li>
  <li>Fix stray double-quote in bash-completion PKG_CONFIG invocation</li>
  <li>Fix distcheck bash-completion file error</li>
  <li>Use a custom test-driver</li>
  <li>Always provide files for vala bindings in dist tarball</li>
  <li>Bug #15960: Add some missing xfconf_shutdown() in xfconf-query</li>
  <li>Bug #15951: Fix 'xfconf_get_error_quark' introspecting warning</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Thumbnail Generator <em>(tumbler)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
</ul>
