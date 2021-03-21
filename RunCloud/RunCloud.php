<?php
print "\n\nRunCloud Assessment !\n\n";
	class Details {
		//Defining Functions
		function listUser()
		{
			$user = new User();
			$user->name = 'Ashraf Kamarudin';
			return $user;
		}

		function serverdetail()
		{
			$server_1 = new Server();
			$server_1->name = 'Server 1';
			$server_1->ipAddress = '192.168.0.1';

			$server_2 = new Server();
			$server_2->name = 'Server 2';
			$server_2->ipAddress = '192.168.0.2';
			return $server_1;
			return $server_2;
		}

		function BasicPlan()
		{
			print "Flow #1 Basic Plan Subscription !\n\n";

			$user->subscribe(new BasicPlan());

			$user->connectServer($server_1);
			$user->connectServer($server_2); // fail
			return $user;
		}

		function UpgradePlan()
		{
			print "Flow #2 Upgrade Plan Subscription !\n\n";

			$user->subscribe(new ProPlan());
			$user->connectServer($server_2); // success
			return $user;
		}

		function UnsubPlan()
		{
				print "Flow #3 Unsubscribe Plan Subscription !\n\n";

				$user->unsubscribe();
				$user->connectServer($server_2); // fail
				return $user;
		}
		function display()
		{

		}
	}//details
?>
