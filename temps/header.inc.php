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
	                  <label for="fService">Service</label>
	                  <select class="form-control" name="fService">
                      <option value="0" selected>Any</option>
                      <option value="1">Netflix</option>
                      <option value="2">Amazon Video</option>
                      <option value="3">Maxdome</option>
	                  </select>
	                </div>
									<div class="form-group">
	                  <label for="fGenre">Genre</label>
	                  <select class="form-control" name="fGenre">
                      <option value="0" selected>Any</option>
                      <option value="1">Action / Adventure</option>
                      <option value="2">Mystery / Thriller</option>
                      <option value="3">Documentation</option>
											<option value="4">Comedy</option>
	                  </select>
	                </div>
									<div class="form-group">
	                  <label for="fRating">Stars</label>
	                  <select class="form-control" name="fRating">
                      <option value="0" selected>Any</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
	                  </select>
	                </div>
									<div class="form-group">
	                  <label for="fYear">Year</label>
	                  <input class="form-control" type="range" name="fYear" min="1950" max="<?php echo (intval(date('Y')) + 1) ?>"/>
	                </div>
									<div class="form-group">
	                  <label for="fAge">Age</label>
	                  <select class="form-control" name="fAge">
                      <option value="0" selected>Any</option>
                      <option value="1">0+</option>
                      <option value="2">6+</option>
                      <option value="3">12+</option>
											<option value="4">16+</option>
											<option value="5">18+</option>
	                  </select>
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
		width: 200px;
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

	#adv-search {
		z-index: 100;
	}
</style>
