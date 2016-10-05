<style>
	/* sidebar */
	.bs-docs-sidebar {
		padding-left: 20px;
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.bs-docs-sidebar .nav>li>span {
		color: #009aa6;
	}

	.bs-docs-sidebar .nav>li>span,
	.bs-docs-sidebar .nav>li>a {
		border-left: 2px solid transparent;
		padding: 4px 20px;
		font-size: 18px;
		font-weight: 400;
	}

	/* nested links */
	.bs-docs-sidebar .nav .nav>li>a {
		padding-top: 1px;
		padding-bottom: 1px;
		padding-left: 30px;
		font-size: 12px;
	}

	/* active & hover links */
	.bs-docs-sidebar .nav>.active>a, 
	.bs-docs-sidebar .nav>li>a:hover, 
	.bs-docs-sidebar .nav>li>a:focus {
		text-decoration: none;          
		background-color: transparent;  
	}

	/* nested active links */
	.bs-docs-sidebar .nav .nav>.active>a, 
	.bs-docs-sidebar .nav .nav>.active:hover>a,
	.bs-docs-sidebar .nav .nav>.active:focus>a {
		font-weight: 700;
		border-left-color: #009aa6; 
		font-weight: 500;
	}

</style>

<nav class="col-sm-3 bs-docs-sidebar">
	<ul id="sidebar" class="nav nav-stacked">
		<li class="">
			<span>Tutorials</span>
			<ul class="nav nav-stacked">
				<li id="quickstart">
					<a href="quickstart.php">Getting Started</a>
				</li>
				<li id="basic_tutorial">
					<a href="basic_tutorial.php">Basic Bot</a>
				</li>
				<li id="bfs_tutorial">
					<a href="bfs_tutorial.php">Breadth First Search Bot</a>
				</li>
			</ul>
		</li>
		<li class="">
			<span>Rules</span>
			<ul class="nav nav-stacked">
				<li id="game_spec">
					<a href="game_spec.php">Game</a>
				</li>
				<li id="contest_spec">
					<a href="contest_spec.php">Contest</a>
				</li>
			</ul>
		</li>
		<li class="">
			<span>References</span>
			<ul class="nav nav-stacked">
				<li id="tool_spec">
					<a href="tool_spec.php">Environment</a>
				</li>
				<li id="replay_file_spec">
					<a href="replay_file_spec.php">Replay File</a>
				</li>
				<li id="io_spec">
					<a href="io_spec.php">IO</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>

<script>
	var name = location.pathname.substring(location.pathname.lastIndexOf("/") + 1).split(".")[0];
	document.getElementById(name).className = "active";
</script>
