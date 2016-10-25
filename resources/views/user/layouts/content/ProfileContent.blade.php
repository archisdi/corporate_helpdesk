<section class="content-header">
	<h1>
		Profile
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#"><i class="fa fa-navicon"></i>
				@if(Auth::user()->getRole() == 'admin')
					Admin
				@elseif(Auth::user()->getRole() == 'it')
					IT
				@elseif(Auth::user()->getRole() == 'employee')
					Employee
				@endif
			</a>
		</li>
		<li class="active">Profile</li>
	</ol>
</section>

<section class="content">

	<!-- Profile Image -->
	<div class="box box-default">
		<div class="box-body box-profile">
			<br>
			<img class="profile-user-img img-responsive img-circle" src="{{asset('/img/users/'. Auth::user()->getImg())}}" alt="User profile picture">
			<h3 class="profile-username text-center">{{Auth::user()->getName()}}</h3>

			<ul class="list-group list-group-unbordered">

				<!-- About Me Box -->
				<div class="content">
					<div class="box-header with-border">
						<h3 class="box-title">About Me</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<strong><i class="ion-ios-person"></i>  Position</strong>
						<p class="text-muted">
							{{Auth::user()->getBureau()}} / {{Auth::user()->getPosition()}}
						</p>

						<hr>

						<strong><i class="ion-ios-email"></i>  Email</strong>
						<p class="text-muted">
							{{Auth::user()->getEmail()}}
						</p>

						<hr>

						<strong><i class="ion-ios-calendar"></i> Birthdate</strong>
						<p>
							{{Auth::user()->getBirth()}}
						</p>			

						<hr>

						<strong><i class="fa fa-venus-mars"></i> Gender</strong>
						<p>
							{{Auth::user()->getGender()}}
						</p>

						<hr>

						<strong><i class="ion-ios-home"></i> Address</strong>
						<p class="text-muted">
							{{Auth::user()->getAddress()}}
						</p>

												
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</ul>
		</div><!-- /.box-body -->
	</div><!-- /.box -->

</section><!-- /.content -->