<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header container">
		<div class="col-xs-6 col-sm-3">
			<a href="/home" class="navbar-brand">Series Overview</a>
		</div>
		<div class="col-xs-6 col-sm-6 search-wrapper">
			<div class="input-group" id="adv-search">

					<input type="text" class="form-control" placeholder="Suchen" name="q" form="search-form">

		      <div class="input-group-btn">
		        <div class="btn-group" role="group">

		          <div class="dropdown dropdown-lg">
		            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="caret"></i>
								</button>
		            <div class="dropdown-menu dropdown-menu-right" role="menu">

		              <form class="form-horizontal" role="form" method="get" action="/search" id="search-form">
		                <div class="form-group">
		                  <label for="filter">Filter by</label>
		                  <select class="form-control" name="filter">
	                      <option value="0" selected>All</option>
	                      <option value="1">Featured</option>
	                      <option value="2">Most popular</option>
	                      <option value="3">Top rated</option>
	                      <option value="4">Most commented</option>
		                  </select>
		                </div>
		                <div class="form-group">
		                  <label for="containA">Author</label>
		                  <input class="form-control" type="text" name="containA"/>
		                </div>
		                <div class="form-group">
		                  <label for="containW">Contains the words</label>
		                  <input class="form-control" type="text" name="containW"/>
		                </div>
		                <button type="submit" class="btn btn-primary">
											<i class="glyphicon glyphicon-search"></i>
										</button>
		              </form>

								</div>
		          </div>

		          <button type="submit" class="btn btn-primary" form="search-form">
								<i class="glyphicon glyphicon-search"></i>
							</button>

		        </div>
					</div>

	  	</div>
		</div>
		<div class="hidden-xs col-sm-3">

		</div>
</nav>

<style>
	.navbar-brand {
		padding: 15px 0;
	}
	.search-wrapper {
		padding: 7.5px 0;
	}
	@media (min-width: 768px) {
		.search-wrapper {
			position: absolute;
			width: 40%;
			text-align: center;
			margin: 0 30%;
		}
	}
	.dropdown.dropdown-lg .dropdown-menu {
	  margin-top: -1px;
	  padding: 6px 20px;
	}
	.input-group-btn .btn-group {
	  display: flex !important;
	}
	.btn-group .btn {
	  border-radius: 0;
	  margin-left: -1px;
	}
	.btn-group .btn:last-child {
	  border-top-right-radius: 4px;
	  border-bottom-right-radius: 4px;
	}
	.btn-group .form-horizontal .btn[type="submit"] {
	  border-top-left-radius: 4px;
	  border-bottom-left-radius: 4px;
	}
	.form-horizontal .form-group {
	  margin-left: 0;
	  margin-right: 0;
	}
	.form-group .form-control:last-child {
	  border-top-left-radius: 4px;
	  border-bottom-left-radius: 4px;
	}
</style>
