  <h1><a name="xfce4-panel"></a>Xfce 4 Panel</h1>

  <h3>Jasper Huijsmans</h3>

  <p><tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt></p><span xmlns="http://www.w3.org/TR/xhtml1/transitional">This
  manual describes <b><tt>xfce4-panel</tt></b> version 4.2.0. Last
  updated: Jan 2005<br>
  <br></span>

  <p><span xmlns=
  "http://www.w3.org/TR/xhtml1/transitional">Copyright � 2004
  Jasper Huijsmans</span></p>
  <hr>

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#panel-intro">Introduction</a></dt>

    <dt><a href="#panel-getting-started">Getting Started</a></dt>

    <dt><a href="#panel-items">Panel Items</a></dt>

    <dd>
      <dl>
        <dt><a href="#launcher-item">Launcher</a></dt>

        <dt><a href="#clock-item">Xfce Clock</a></dt>

        <dt><a href="#mailcheck-item">Mail checker</a></dt>

        <dt><a href="#switcher-item">Desktop Switcher and Graphical
        Pager</a></dt>

        <dt><a href="#systembuttons-item">System Buttons</a></dt>

        <dt><a href="#separator-item">Separator</a></dt>
      </dl>
    </dd>

    <dt><a href="#subpanels">Panel Menus</a></dt>

    <dt><a href="#panel-settings">Panel Preferences</a></dt>

    <dd>
      <dl>
        <dt><a href="#panel-apearance">Appearance</a></dt>

        <dt><a href="#panel-behaviour">Behaviour</a></dt>
      </dl>
    </dd>

    <dt><a href="#panel-advanced">Advanced</a></dt>

    <dd>
      <dl>
        <dt><a href="#panel-files">Files and Environment
        Variables</a></dt>

        <dt><a href="#panel-kiosk">Kiosk Mode</a></dt>

        <dt><a href="#panel-transparency">Transparency</a></dt>
      </dl>
    </dd>

    <dt><a href="#panel-copyright">About
    <b><tt>xfce4-panel</tt></b></a></dt>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name=
  "panel-intro"></a>Introduction</h2>

  <p>The Xfce 4 panel is part of the <a href="http://www.xfce.org"
  target="_top">Xfce 4 Desktop Environment</a> and features program
  launchers, panel menus, a clock, a desktop switcher and more.
  Many aspects of the panel can be configured through graphical
  dialogs. This manual should provide you with all necessary
  information on how to adjust the panel to your liking.</p>

  <p>�</p>

  <h2 style="clear: both"><a name=
  "panel-getting-started"></a>Getting Started</h2>

  <p>You will usually start the panel as part of your Xfce session,
  using the <b><tt>startxfce4</tt></b> script. The command that
  will be run for the panel is <b><tt>xfce4-panel</tt></b>.</p>

  <p>When you start the panel you will see a bar appearing at the
  bottom of your screen, looking like this:</p><a name=
  "default-panel-fig"></a>

  <p><b>Figure�1.�Default Xfce panel</b></p><img src=
  "images/default_panel.png" alt=
  "The Xfce Panel default configuration: several launchers, a new mail monitor, a clock and a desktop pager; also includes an opened panel menu. ">

  <p>The figure shows the default panel configuration with one open
  panel menu. Hovering the mouse over an item will show a tooltip.
  The Xfce Panel makes extensive use of left and right mouse
  buttons. Left clicking performs the default action of an item,
  while right-clicking usually brings up a context menu. Shift +
  left click may commonly be used instead of a right-click. Note
  that this manual assumes the use of a right-handed mouse.</p>

  <p>There is a move handle on each side of the panel. You can use
  it to drag the panel anywhere on the edges of the screen.
  Dragging over half of the screen will move the panel to the
  opposite screen edge. Clicking with the right mouse button on one
  of them shows a popup menu ... Go on, try it ;-)</p><a name=
  "handle-popup-fig"></a>

  <p><b>Figure�2.�Move handle popup menu</b></p><img src=
  "images/handle-popup.png" alt="Move handle popup menu.">

  <p>The area between the move handles contains panel items. The
  available items are are described in the "<a href="#panel-items"
  target="_top">Panel Items</a>" section. Most items perform an
  action when clicked. Right-clicking on an item will popup a menu
  from which you can open a properties dialog, remove the item or
  add a new item. Items can also be added from the right-click menu
  on one of the move handles (see above).</p><a name=
  "item-popup-fig"></a>

  <p><b>Figure�3.�Item popup menu</b></p><img src=
  "images/item-popup.png" alt="Item popup menu.">

  <p>When you want to add an item, a dialog is opened showing all
  available panel items. Some items can appear only once in the
  panel, e.g. the system tray, and they will appear greyed out when
  one is already present.</p><a name="add-item-dialog-fig"></a>

  <p><b>Figure�4.�Add item dialog</b></p><img src=
  "images/add-item-dialog.png" alt=
  "Dialog with available panel items">

  <p>Global panel preferences can be changed from the Xfce 4
  Settings Manager, which can be started either from a panel
  launcher, or by running <b><tt>xfce-settings-show</tt></b>. See
  "<a href="#panel-settings" target="_top">Panel Preferences</a>"
  for an explanation of the available options.</p>

  <p>�</p>

  <h2 style="clear: both"><a name="panel-items"></a>Panel
  Items</h2>

  <p>The Xfce 4 panel has the possibility to load external plugins
  as well as builtin ones. In this section we will only describe
  panel items that are installed with the panel.</p>

  <p>The properties dialog for a panel item can be opened from the
  right-click menu on the item. Each type of panel item has its own
  configuration dialog. Every dialog offers at least these
  options:</p>

  <ul type="disc">
    <li>Change the position of the item on the panel.</li>

    <li>Remove the item.</li>

    <li>Close the dialog.</li>
  </ul>

  <h3><a name="launcher-item"></a>Launcher</h3>

  <p>The most common panel item is the launcher item. It allows you
  to start programs from the panel. The properties dialog offers
  the following options:</p>

  <dl>
    <dt>Icon</dt>

    <dd>
      <p>The icons used by the panel will follow the icon theme you
      choose from the <a href="xfce-mcs-plugins.html#ui-settings"
      target="_top">user interface settings dialog</a>. Of course
      you can also choose a custom icon, either by browsing the
      file system from the button next to the entry or by dragging
      an image on the preview area from a file manager.</p>
    </dd>

    <dt>Command</dt>

    <dd>
      <p>You can type the command to run or browse the file system.
      There is an option to start in a terminal and one to use
      startup notification. This last option means that the window
      manager can show an hourglass while the program is loading.
      But, the application has to support it as well. Programs
      build with Gtk 2.2 should support it.</p>
    </dd>

    <dt>Tooltip</dt>

    <dd>
      <p>The panel item will show this tooltip if you hold the
      mouse over it.</p>
    </dd>

    <dt>Menu</dt>

    <dd>
      <p>A launcher can have a panel menu attached to it. When this
      option is selected a small button with an arrow will appear
      next to the item. Look <a href="#subpanels" target=
      "_top">here</a> for more info on panel menus. The position of
      the menu button can be changed from the global settings
      dialog.</p>
    </dd>
  </dl><a name="launcher-fig"></a>

  <p><b>Figure�5.�Launcher item</b></p><img src=
  "images/launcher-properties.png" alt=
  "Shows properties dialog for launcher item.">

  <h3><a name="clock-item"></a>Xfce Clock</h3>

  <p>The Xfce Clock has a number of options to change the way it
  looks. There are three clock types available: analog, digital and
  LED. There is an option to show seconds and for the digital and
  LED clock types you can choose whether the clock will be in 24
  hour mode, 12 hour mode, or 12 hour mode with AM/PM indication.
  The clock shows the current date as a tooltip. Clicking on the
  clock will not perform any action.</p><a name="clock-fig"></a>

  <p><b>Figure�6.�Clock item</b></p><img src=
  "images/clock-properties.png" alt=
  "Shows properties dialog for clock item.">

  <h3><a name="mailcheck-item"></a>Mail checker</h3>

  <p>The mail checker monitors a mailbox for incoming mail. The
  mailbox can be in mbox or Maildir format.</p>

  <p>The mailbox icon will follow your icon theme. You can choose
  the location of the mailbox, the command to run when you click on
  the button and the interval between checks. The command has the
  same options as the launcher item command (see <a href=
  "#launcher-item" target="_top">above</a>). You can also choose a
  command to run when new mail arrives.</p><a name=
  "mailcheck-fig"></a>

  <p><b>Figure�7.�Mail checker item</b></p><img src=
  "images/mailcheck-properties.png" alt=
  "Shows properties dialog for mail checker item.">

  <p>For advanced usage you can also provide a remote POP3 mailbox
  if you use the following format for the mailbox entry:
  <tt>pop3://user:password@server:port</tt>. If you omit the port
  it will default to 110.</p>

  <p>Note that this feature is still experimental. Before using it,
  make sure you have a good network connection, because when the
  mail check fails it can block the panel.</p>

  <h3><a name="switcher-item"></a>Desktop Switcher and Graphical
  Pager</h3>

  <p>The panel provides two items that deal with virtual desktops.
  A CDE-like desktop switcher, that shows buttons with the desktop
  name and a graphical pager that shows a miniature view of the
  desktops and even allows you to move windows to another workspace
  by dragging the mini-window in the pager. The graphical pager
  also allows you to change workspaces by using the mouse
  scrollwheel.</p>

  <p>For the graphical pager you can set the number of rows to use,
  or columns when the panel is in vertical mode.</p><a name=
  "pager-fig"></a>

  <p><b>Figure�8.�Graphical pager</b></p><img src=
  "images/pager-properties.png" alt=
  "Shows properties dialog for the graphical pager. ">

  <h3><a name="systembuttons-item"></a>System Buttons</h3>

  <p>A systembuttons item shows one or two buttons which can
  perform special system actions. The buttons follow your panel
  icon theme. There are four buttons available:</p>

  <dl>
    <dt>Lock</dt>

    <dd>
      <p>Runs the <b><tt>xflock4</tt></b> script that will attempt
      to lock the screen using either xscreensaver or if that fails
      xlock.</p>
    </dd>

    <dt>Exit</dt>

    <dd>
      <p>This will popup a logout dialog to end your Xfce
      session.</p>
    </dd>

    <dt>Info</dt>

    <dd>
      <p>The info button will show the <em>About Xfce 4</em>
      dialog.</p>
    </dd>

    <dt>Setup</dt>

    <dd>
      <p>Pressing the setup button will open the Xfce settings
      manager dialog, from which you have access to the settings
      for all Xfce components as well as some system settings, such
      as mouse behaviour and user interface settings.</p>
    </dd>
  </dl><a name="systembuttons-fig"></a>

  <p><b>Figure�9.�Systembuttons item</b></p><img src=
  "images/systembuttons-properties.png" alt=
  "Shows properties dialog for systembuttons item. ">

  <h3><a name="separator-item"></a>Separator</h3>

  <p>This item simply adds a separator line to the panel. It has no
  options to set except its position.</p>

  <p>Note that it may be a bit hard to popup the right-click menu,
  because you only have a small area to click on.</p><a name=
  "nooptions-fig"></a>

  <p><b>Figure�10.�Item without options</b></p><img src=
  "images/nooptions-properties.png" alt=
  "Shows properties dialog for item without options. ">

  <p>�</p>

  <h2 style="clear: both"><a name="subpanels"></a>Panel Menus</h2>

  <p>Panel launcher items can have a menu associated with it, which
  can be opened by clicking on the small arrow button next to the
  item. The actual position of these popup buttons is configurable
  from the global preferences dialog. You can also open the menu by
  pressing the launcher button and holding it down. After a short
  delay the menu will open.</p>

  <p>Use the 'Add launcher' item at the top of a panel menu to add
  a new item or drag an executable to this item from a file
  manager. To remove items from a panel menu use the 'Remove'
  button in the properties dialog.</p>

  <p>A special feature of panel menus is that they can be detached
  from the panel and live in their own window. To detach a menu
  click on the small line at the bottom of the menu (see the
  <a href="#default-panel-fig" target="_top">screenshot</a> of the
  default panel).</p>

  <p>The properties dialog for a menu item is opened immediately
  when clicking the right mouse button. The dialog itself is very
  similar to the dialog for launcher type panel items.</p><a name=
  "menuitem-fig"></a>

  <p><b>Figure�11.�Menu Item</b></p><img src=
  "images/menuitem-properties.png" alt=
  "Shows properties dialog for menu items. ">

  <p>�</p>

  <h2 style="clear: both"><a name="panel-settings"></a>Panel
  Preferences</h2>

  <p>The properties dialog for the Xfce 4 Panel can be opened from
  the Xfce 4 Settings Manager or from the right-click menu on one
  of the panel move handles.</p><a name="panel-settings-fig"></a>

  <p><b>Figure�12.�Panel Settings</b></p><img src=
  "images/panel-settings.png" alt=
  "Shows properties dialog for global panel preferences. ">

  <h3><a name="panel-apearance"></a>Appearance</h3>

  <dl>
    <dt>Size</dt>

    <dd>
      <p>There are four panel sizes available: small, medium big
      and huge. Medium is the default.</p>
    </dd>

    <dt>Orientation</dt>

    <dd>
      <p>The Xfce 4 Panel can be set to a vertical orientation as
      well as the standard horizontal layout.</p>
    </dd>

    <dt>Popup position</dt>

    <dd>
      <p>This option change the position of the buttons that open a
      panel menu. It can be above, below, to the left or to the
      right of their associated panel item.</p>
    </dd>
  </dl>

  <h3><a name="panel-behaviour"></a>Behaviour</h3>

  <dl>
    <dt>Autohide</dt>

    <dd>
      <p>If you choose autohide, the panel will collapse to a thin
      bar. Moving the mouse over it will unhide the panel.</p>
    </dd>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name=
  "panel-advanced"></a>Advanced</h2>

  <h3><a name="panel-files"></a>Files and Environment
  Variables</h3>

  <p>Xfce now uses the Basedir Specification as defined on <a href=
  "http://freedesktop.org" target="_top">Freedesktop.org</a> to
  locate its data and configuration files. This means that file
  locations will be specified as a path relative to the directories
  described in the specification.</p>

  <dl>
    <dt>${XDG_CONFIG_HOME}</dt>

    <dd>
      <p>The first base directory to look for configuration files.
      By default this is set to <tt>~/.config/</tt>.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}</dt>

    <dd>
      <p>A list of system directories that contain configuration
      data. By default the panel will look in
      <tt>${sysconfdir}/xdg/</tt> and <tt>/etc/xdg/</tt>. The value
      of ${sysconfdir} depends on how the program was build and
      will often be <tt>/etc/</tt> for binary packages.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/panel/contents.xml</dt>

    <dd>
      <p>This is the location of the xml configuration file that
      describes the contents of the panel, relative to the base
      directories metioned above.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/mcs_settings/panel.xml</dt>

    <dd>
      <p>This is the relative location of the global panel
      settings. This file is managed by the settings manager,
      rather than by the panel itself.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/kiosk/kioskrc</dt>

    <dd>
      <p>Kiosk Mode configuration file. See <a href="#panel-kiosk"
      target="_top">next section</a> for an explanation.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/transparency</dt>

    <dd>
      <p>Transparency configuration. Further explanation is given
      in <a href="#panel-transparency" target="_top">this
      section</a> below.</p>
    </dd>
  </dl>

  <p>None of the configuration files, except <tt>kioskrc</tt> and
  <tt>transparency</tt>, are designed to be edited by hand; in fact
  the changes will be overwritten if you edit them while the panel
  and the settings manager are running.</p>

  <h3><a name="panel-kiosk"></a>Kiosk Mode</h3>

  <p>The panel now has support for Kiosk Mode, that will prevent
  users from making changes to their panel configuration. To use it
  you have to edit or create the file
  <tt>${sysconfdir}/xdg/xfce4/kiosk/kioskrc</tt>.</p>

  <p>The best way to explain the format of this file is by using an
  example. The xfce4-panel section of your kioskrc might look like
  this:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
[xfce4-panel]
CustomizePanel=%powerusers,foo
</pre>
      </td>
    </tr>
  </table>

  <p>This allows only users in the group powerusers and the user
  foo to customize their panels.</p>

  <h3><a name="panel-transparency"></a>Transparency</h3>

  <p>Please, note that transparency only works with an X server
  that supports the Composite extension, like XOrg &gt;= 6.8.0 and
  the composite extension has been enabled in the configuration
  file and the window manager supports it (e.g.
  <b><tt>xfwm4</tt></b> has to be compiled with
  <tt>--enable-compositor</tt>).</p>

  <p>By default the panel will be transparent unless the autohide
  option has been set. When the mouse moves over the panel, the
  transparency will be temporarily removed.</p>

  <p>You can create the file
  <tt>&lt;basedir&gt;/xfce4/transparency</tt> if you want to change
  the transparency value for the panel (or the iconbox). Create the
  file and add a line with the format
  <em><tt>panel=&lt;value&gt;</tt></em>, where value is a number
  between 0 and 100. Setting it to 0 effectively turns transparency
  off.</p>

  <p>For example, a transparency file may look like this:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
panel=25
iconbox=0
</pre>
      </td>
    </tr>
  </table>

  <p>�</p>

  <h2 style="clear: both"><a name="panel-copyright"></a>About
  <b><tt>xfce4-panel</tt></b></h2>

  <p><b><tt>xfce4-panel</tt></b> was written by Jasper Huijsmans
  (<tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>). To find
  more information, please visit the <a href="http://www.xfce.org"
  target="_top">Xfce web site</a>.</p>

  <p>To report a bug or make a suggestion regarding this
  application or this manual, use the bug tracking system at
  <a href="http://bugzilla.xfce.org/" target=
  "_top">http://bugzilla.xfce.org/</a>.</p>

  <p>If you have questions about the use or installation of this
  package, please ask on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce" target=
  "_top">xfce</a> mailing list. Development discussion takes place
  on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev" target=
  "_top">xfce4-dev</a> mailing list.</p>

  <p><b><tt>xfce4-panel</tt></b> is distributed under the terms of
  the GNU General Public License as published by the Free Software
  Foundation; either version 2 of the License, or (at your option)
  any later version.</p>

  <p>You should have received a copy of the GNU General Public
  License along with this program; if not, write to the Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>

