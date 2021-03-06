<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?= $page_title ?></title>
	
	<?= $tpl->head_data() ?>
	
	<?= css("{$theme_url}css/admin.css") ?>
	
	<script type="text/javascript" src="<?= $theme_url ?>js/admin.js"></script>
</head>
<body>
	<div id="container">
		<div id="admin-header">
			<h1><?= $this->config->item('site_name') ?> // Administration</h1>
		</div>
		<div id="admin-menubar">
			<? if ($this->session->userdata('logged_in')): ?>
			<ul class="dropdown">
				<li class="parent">
					<span>Site</span>
					<ul>
						<li>
							<a href="<?= site_url('admin') ?>" class="icon-dashboard">Dashboard</a>
						</li>
						<li>
							<a href="#" class="icon-config">Configuration</a>
						</li>
						<li>
							<a href="#" class="icon-userman">User Manager</a>
						</li>
						<li>
							<a href="<?= site_url() ?>" class="icon-viewsite">View Site</a>
						</li>
						<li>
							<a href="<?= site_url('admin/logout') ?>" class="icon-logout">Logout</a>
						</li>
					</ul>
				</li>
				<li class="parent">
					<span>Content</span>
					<ul>
						<li>
							<a href="<?= site_url('admin/content/create') ?>" class="icon-newpage">New Article</a>
						</li>
						<li>
							<a href="<?= site_url('admin/content') ?>" class="icon-articleman">Article Manager</a>
						</li>
						<li>
							<a href="#" class="icon-encpage">Encrypted Articles</a>
						</li>
					</ul>
				</li>
				<li class="parent">
					<span>Widgets</span>
					<ul>
						<li>
							<a href="#" class="icon-newwidget">New Widget</a>
						</li>
						<li>
							<a href="#" class="icon-widgetpos">Widget Positions</a>
						</li>
					</ul>
				</li>
				<li class="parent">
					<span>Help</span>
					<ul>
						<li>
							<a href="#" class="icon-help">Help Docs</a>
						</li>
						<li>
							<a href="#" class="icon-sysinfo">System Information</a>
						</li>
						<li>
							<a href="#" class="icon-authorlink">Author's Website</a>
						</li>
					</ul>
				</li>
			</ul>
			<? endif; ?>
		</div>
		
		<div id="module">
			<?= $page_body ?>
		</div>
	</div>
	
	<div id="footer">
		Powered by Lenka<br />Page generated in {elapsed_time} seconds with <?= $this->db->total_queries() ?> database <?= ($this->db->total_queries() == 1 ? 'query' : 'queries') ?>.
	</div>
</body>
</html>