<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>Xfce 4 Desktop Manager</title><link rel="stylesheet" href="../xfce.css" type="text/css"><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="#xfdesktop" title="Xfce 4 Desktop Manager"><link rel="next" href="#xfdesktop-intro" title="Introduction"></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="article" lang="en"><div class="titlepage"><div><div><h1 class="title"><a name="xfdesktop"></a>Xfce 4 Desktop Manager</h1></div><div><div class="authorgroup"><div class="author"><h3 class="author"><span class="firstname">Jasper</span> <span class="surname">Huijsmans</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt></p></div></div></div><div class="author"><h3 class="author"><span class="firstname">Fran�ois</span> <span class="surname">Le Clainche</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:fleclainche@wanadoo.fr">fleclainche@wanadoo.fr</a>&gt;</tt></p></div></div></div><div class="author"><h3 class="author"><span class="firstname">Brian</span> <span class="surname">Tarricone</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:kelnos@xfce.org">kelnos@xfce.org</a>&gt;</tt></p></div></div></div></div></div><div><span xmlns="http://www.w3.org/TR/xhtml1/transitional" class="releaseinfo">This manual describes <b xmlns="" class="application"><tt>xfdesktop</tt></b> version 4.2.0.
  <br></br></span></div><div><p class="copyright">Copyright � 2004 Jasper Huijsmans</p></div><div><p class="copyright">Copyright � 2004 Fran�ois Le Clainche</p></div><div><p class="copyright">Copyright � 2004 Brian Tarricone</p></div></div><hr></div><div class="toc"><p><b>Table of Contents</b></p><dl><dt><span class="sect1"><a href="#xfdesktop-intro">Introduction</a></span></dt><dt><span class="sect1"><a href="#xfdesktop-background">Backdrops</a></span></dt><dt><span class="sect1"><a href="#xfdesktop-menu"><b class="application"><tt>xfdesktop</tt></b> root menu</a></span></dt><dt><span class="sect1"><a href="#xfdesktop-copyright">About xfdesktop</a></span></dt></dl></div><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfdesktop-intro"></a>Introduction</h2></div></div></div><p>The <b class="application"><tt>xfdesktop</tt></b> application manages the desktop backdrop. It sets a
    backdrop image and/or color and it can pop up an applications
    menu and a list of all running applications when you click on the desktop
    with the right or middle mouse button respectively.
  </p><p>
    The <b class="application"><tt>xfdesktop</tt></b> package installs a settings dialog for use with 
    the <span class="emphasis"><em>Xfce 4 Settings Manager</em></span>. From this dialog you 
    can change the backdrop image and color and change settings for the menu
    and the window list.
  </p></div><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfdesktop-background"></a>Backdrops</h2></div></div></div><p>You can start the Desktop settings dialog by clicking on the
    "Desktop" button in the 
    <a href="xfce-mcs-manager.html#manager-dialog" target="_top">Xfce Settings Manager</a>.
  </p><div class="figure"><a name="xfdesktop-background-fig"></a><p class="title"><b>Figure�1.�Backdrop Settings</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfdesktop-background.png" alt="Shows backdrop settings dialog.
	  "></div></div></div><div class="variablelist"><dl><dt><span class="term">Color</span></dt><dd><p>This dialog allows you to select a color style for your desktop 
	  backdrop: solid color, horizontal gradient or vertical gradient. 
	  Depending on your choice, you will be able to choose one or two 
	  colors, using "First Color" and "Second Color" buttons. These 
	  buttons open a color chooser dialog:</p><div class="figure"><a name="select_bg_color-fig"></a><p class="title"><b>Figure�2.�Select backdrop color</b></p><div class="screenshot"><div class="mediaobject"><img src="images/select_bg_color.png" alt="Shows the Select backdrop color dialog"></div></div></div><p>�</p><div class="itemizedlist"><ul type="disc"><li>You can use the colored ring with a triangle inside:
	    select the color you want from the outer ring, then select the
	    darkness or lightness of that color using the inner triangle.
	    Corresponding values of brightness, deepness, and amount of red,
	    green and blue light in the color appear through the entries on
	    the right side of the window.
	  </li><li>You can click the eyedropper, then click anywhere on your
	    screen to select the color.
	  </li><li>You can enter an HTML-style hexadecimal color value, or
	    simply a color name, in the "Color Name" entry.
	  </li></ul></div><p>The selected colors will fill the entire root window, and will 
	  remain visible through a transparent backdrop image.</p></dd><dt><span class="term">Image</span></dt><dd><p>Unselect the "Show Image" option if you want <b class="application"><tt>xfdesktop</tt></b> to ignore 
	  the backdrop image and only use the previously selected colors.
	</p><p>The "File" entry shows the path to the currently selected
	  backdrop image. If you want to change it, just drop and image 
	  on the path field, or edit the path, or click the browse button, 
	  and a classic file-browsing dialog will appear.
	</p><p>You can create a list of backdrop images that will be randomly
	  used at startup. Click the "New list" button to open the list 
	  editing dialog:
	</p><div class="figure"><a name="xfdesktop-list-fig"></a><p class="title"><b>Figure�3.�Backdrop List</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfdesktop-list.png" alt="Shows backdrop list manager."></div></div></div><p>You may want to change the default path and name of your
	  custom list of backdrops in the "List file" entry.
	</p><p>You can easily add an image file by clicking the "plus" button.
	  That action will open a file-browsing window. You can remove a file,
	  if you select it in the list and click the "minus" button. When your
	  list is complete, click the "Save" button to save it. If you want to
	  modify its content later, use the "Edit list" button of the
	  Backdrop settings manager.
	</p><p>You can recover an older list by dropping its name.list file on 
	the backdrop settings dialog from a file manager.</p><p>To refresh the backdrop with a new random image from the list
	  just run the <b class="application"><tt>xfdesktop</tt></b> command again, e.g. from a terminal or the run 
	  dialog, or <b class="application"><tt>xfdesktop</tt></b>  [-reload].
	</p><p>Four Style options (Tiled, Scaled, Centered and Stretched) are
	  available to specify the fitting of the backdrop image on the 
	  screen, depending on its size. You can also select the "Auto" item 
	  if you want to let <b class="application"><tt>xfdesktop</tt></b> take care of this setting.
	</p><p>The slider at the bottom of the dialog allows you to adjust the 
	  brightness of the backdrop image and/or color.
	</p><p>xfdesktop supports xinerama and multiscreen modes. In 
	  multiscreen mode, the "Backdrops" dialog shows one tab per screen.
	</p></dd></dl></div></div><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfdesktop-menu"></a><b class="application"><tt>xfdesktop</tt></b> root menu</h2></div></div></div><p><b class="application"><tt>xfdesktop</tt></b> provides an applications menu and a windowlist menu that appear
    when you click on the desktop with your right or middle mouse button.
  </p><p>The Menu tab of the Desktop settings dialog allows you to configure 
    the menu behaviour.
  </p><div class="figure"><a name="xfdesktop-menu-tab-fig"></a><p class="title"><b>Figure�4.�Menu tab</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfdesktop-menu-tab.png" alt="Shows the menu tab of the Desktop settings dialog."></div></div></div><p>If you want to use the root menu and/or the window list, the 
    corresponding options have to be selected in the settings dialog.
  </p><p>A right-click on the desktop backdrop opens a menu that allows you to
    start some applications. Its configuration file,
    <tt class="filename">menu.xml</tt>, can be found under the path
    <tt class="filename">$sysconfdir/xdg/xfce4/menu.xml</tt>.  For binary packages,
    $sysconfdir is often <tt class="filename">/etc</tt> and for source compiles, it
    defaults to <tt class="filename">/usr/local/etc</tt>.
  </p><p>While it is possible to edit the file manually, the recommended method
    for editing the <tt class="filename">menu.xml</tt> file is via the Xfce 4 Menu
    Editor, which can be started by running
    <b class="application"><tt>xfce4-menueditor</tt></b>, or using 
    the "Edit desktop menu" button available from the Menu tab of the Desktop 
    settings dialog. The menu editor also supports drag'n'drop from a file 
    manager.
  </p><p>If you've edited the menu via
    <b class="application"><tt>xfce4-menueditor</tt></b>, the user-customized menu file
    will be saved to
    <tt class="filename">$XDG_CONFIG_HOME/xfce4/desktop/menu.xml</tt>.
	$XDG_CONFIG_HOME usually defaults to <tt class="filename">~/.config</tt>.  If
    editing the file manually, copying it to this location first is the
    preferred method.
  </p><div class="figure"><a name="xfdesktop-editor-fig"></a><p class="title"><b>Figure�5.�<tt class="application">xfdesktop</tt> menu editor</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfdesktop-editor.png" alt="Shows xfdesktop menu editor.
	  "></div></div></div><p>NOTE: If you choose to edit the file manually,
    <tt class="filename">menu.xml</tt> has to be in UTF-8 encoding for the toolkit to
	be able to display accented or other non-ASCII characters. Therefore, you
    need an editor that supports UTF-8, like <b class="application"><tt>gedit</tt></b>.
  </p><div class="figure"><a name="root-menu-fig"></a><p class="title"><b>Figure�6.�<tt class="application">xfdesktop</tt> right-click mouse menu</b></p><div class="screenshot"><div class="mediaobject"><img src="images/root_menu.png" alt="Shows xfdesktop right-click mouse menu.
	  "></div></div></div><p>A middle-click on the desktop backdrop shows a list of all opened 
    windows ordered by workspace. It also allows you to add or remove 
    a workspace.
  </p><div class="figure"><a name="root-menu2-fig"></a><p class="title"><b>Figure�7.�<tt class="application">xfdesktop</tt> middle-click mouse menu</b></p><div class="screenshot"><div class="mediaobject"><img src="images/root_menu2.png" alt="Shows xfdesktop middle-click mouse menu.
	  "></div></div></div><p>In order to lower the hardware requirements to run xfdesktop, you can 
    disable the usage of icons in the desktop menu and the window list menu 
    from the settings dialog.
  </p><p>You can open the menu or window list from the commandline as well.
    This can be useful for keyboard shortcuts. To open the menu run the
    command <b class="application"><tt>xfdesktop</tt></b> <b class="application"><tt>-menu</tt></b>, and for the windowlist 
    use <b class="application"><tt>xfdesktop</tt></b> <b class="application"><tt>-windowlist</tt></b>.
  </p></div><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfdesktop-copyright"></a>About xfdesktop</h2></div></div></div><p><b class="application"><tt>xfdesktop</tt></b> was written by 
    Brian Tarricone (<tt class="email">&lt;<a href="mailto:kelnos@xfce.org">kelnos@xfce.org</a>&gt;</tt>) and 
    Jasper Huijsmans (<tt class="email">&lt;<a href="mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>), 
    Benedikt Meurer (<tt class="email">&lt;<a href="mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>).
    For more information, please visit the 
    <a href="http://www.xfce.org" target="_top">Xfce website</a>. 
  </p><p>To report a bug or make a suggestion regarding this application or
    this manual, use the bug tracking system at <a href="http://bugzilla.xfce.org/" target="_top">http://bugzilla.xfce.org/</a>. 
  </p><p>If you have questions about the use or installation of this package,
    please ask on the <a href="http://lunar-linux.org/mailman/listinfo/xfce" target="_top">xfce</a> mailing list. Development discussion takes
    place on the <a href="http://lunar-linux.org/mailman/listinfo/xfce4-dev" target="_top">xfce4-dev</a> mailing list.
  </p><p> This program is distributed under the terms of the
    GNU General Public License as published by the Free Software Foundation; 
    either version 2 of the License, or (at your option) any later version.
  </p><p>You should have received a copy of the GNU General Public License 
    along with this program; if not, write to the Free Software 
    Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, 
    USA.</p></div></div></body></html>
