angular.module('controller',[])
   
.controller('UsersController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {

	var pathimg = "assets/img/users/";
	$scope.users = [{"id":"USR001",
				  "username":"member.satu",
				  "password":"1234",
				  "email":"febryfairuz@gmail.com",
				  "firstname":"Febry",
				  "middlename":"Damatraseta",
				  "lastname":"Fairuz",
				  "biodata":"Hello there! Mrrow! As you can probably tell by the name, I love Warriors Cats. Scratchstar is my own personal Warriors OC. May as well tell a bit about him. He is the SkyClan leader after Leafstar. He is a large, fluffy maine coon. He is very temperamental and opinionated. He is easily frustrated, independent, and hates working with partners. Honestly, they just steal your prey on patrols! His personality letters are ENFP. He is a strong leader who never backs down, and has lead SkyClan to victory many times. He is brown with white highlights, thin orange stripes, and huge white paws. His belly and chest fur are also white, as well as his tail tip. He has shredded ears, and one scar the reaches from his right ear past his right eye, and one one his shoulder and back leg. There are also other scars, but they aren't as important. His eyes are slightly different shades of crystal clear blue- his right is a bit more aqua than his left. And that's Scratchstar for ya!",
				  "role":"1", //1:member 2: staff
				  "is_onboarding":"1",
				  "birthdate":"29 February 1994",
				  "gender":"Male",
				  "country":"Indonesia",
				  "city":"Pancoran",
				  "province":"DKI Jekarda",
				  "sosmed":["fb","twitter","ig"],
				  "is_active":"1",
				  "read":"10",
				  "review":"9",
				  "rating":"11",
				  "pictures":"user-4.jpg",
				  "friend":"1"},

				  {"id":"USR002",
				  "username":"septian.cahyadi",
				  "password":"1234",
				  "email":"septian@cahyadi.com",
				  "firstname":"Septian",
				  "middlename":"",
				  "lastname":"Cahyadi",
				  "biodata":"Hello there! Mrrow! As you can probably tell by the name, I love Warriors Cats. Scratchstar is my own personal Warriors OC. May as well tell a bit about him. He is the SkyClan leader after Leafstar. He is a large, fluffy maine coon. He is very temperamental and opinionated. He is easily frustrated, independent, and hates working with partners. Honestly, they just steal your prey on patrols! His personality letters are ENFP. He is a strong leader who never backs down, and has lead SkyClan to victory many times. He is brown with white highlights, thin orange stripes, and huge white paws. His belly and chest fur are also white, as well as his tail tip. He has shredded ears, and one scar the reaches from his right ear past his right eye, and one one his shoulder and back leg. There are also other scars, but they aren't as important. His eyes are slightly different shades of crystal clear blue- his right is a bit more aqua than his left. And that's Scratchstar for ya!",
				  "role":"1", //1:member 2: staff
				  "is_onboarding":"1",
				  "birthdate":"15 September 1980",
				  "gender":"Male",
				  "country":"Indonesia",
				  "city":"Bogor",
				  "province":"Jawa Barat",
				  "sosmed":["fb","twitter","ig"],
				  "is_active":"1",
				  "read":"10",
				  "review":"9",
				  "rating":"11",
				  "pictures":"user-2.jpg",
				  "friend":"1"},
				  
				  {"id":"USR003",
				  "username":"ade.solihin",
				  "password":"1234",
				  "email":"ade@solihin.com",
				  "firstname":"Ade",
				  "middlename":"",
				  "lastname":"Solihin",
				  "biodata":"Hello there! Mrrow! As you can probably tell by the name, I love Warriors Cats. Scratchstar is my own personal Warriors OC. May as well tell a bit about him. He is the SkyClan leader after Leafstar. He is a large, fluffy maine coon. He is very temperamental and opinionated. He is easily frustrated, independent, and hates working with partners. Honestly, they just steal your prey on patrols! His personality letters are ENFP. He is a strong leader who never backs down, and has lead SkyClan to victory many times. He is brown with white highlights, thin orange stripes, and huge white paws. His belly and chest fur are also white, as well as his tail tip. He has shredded ears, and one scar the reaches from his right ear past his right eye, and one one his shoulder and back leg. There are also other scars, but they aren't as important. His eyes are slightly different shades of crystal clear blue- his right is a bit more aqua than his left. And that's Scratchstar for ya!",
				  "role":"1", //1:member 2: staff
				  "is_onboarding":"1",
				  "birthdate":"15 September 1981",
				  "gender":"Male",
				  "country":"Indonesia",
				  "city":"Bogor",
				  "province":"Jawa Barat",
				  "sosmed":["fb","twitter","ig"],
				  "is_active":"1",
				  "read":"10",
				  "review":"9",
				  "rating":"11",
				  "pictures":"user-1.jpg",
				  "friend":"1"},
				  
				  {"id":"USR004",
				  "username":"ferdinan.feisal",
				  "password":"1234",
				  "email":"member@gmail.com",
				  "firstname":"Ferdinan",
				  "middlename":"",
				  "lastname":"Feisal",
				  "biodata":"Hello there! Mrrow! As you can probably tell by the name, I love Warriors Cats. Scratchstar is my own personal Warriors OC. May as well tell a bit about him. He is the SkyClan leader after Leafstar. He is a large, fluffy maine coon. He is very temperamental and opinionated. He is easily frustrated, independent, and hates working with partners. Honestly, they just steal your prey on patrols! His personality letters are ENFP. He is a strong leader who never backs down, and has lead SkyClan to victory many times. He is brown with white highlights, thin orange stripes, and huge white paws. His belly and chest fur are also white, as well as his tail tip. He has shredded ears, and one scar the reaches from his right ear past his right eye, and one one his shoulder and back leg. There are also other scars, but they aren't as important. His eyes are slightly different shades of crystal clear blue- his right is a bit more aqua than his left. And that's Scratchstar for ya!",
				  "role":"1", //1:member 2: staff
				  "is_onboarding":"1",
				  "birthdate":"15 September 1982",
				  "gender":"Male",
				  "country":"Indonesia",
				  "city":"Bogor",
				  "province":"Jawa Barat",
				  "sosmed":["fb","twitter","ig"],
				  "is_active":"1",
				  "read":"10",
				  "review":"9",
				  "rating":"11",
				  "pictures":"user-3.jpg",
				  "friend":"1"},
				  
				  {"id":"USR005",
				  "username":"asep.kanghitut",
				  "password":"1234",
				  "email":"member2@gmail.com",
				  "firstname":"Asep",
				  "middlename":"Tukang",
				  "lastname":"Hitut",
				  "biodata":"Hello there! Mrrow! As you can probably tell by the name, I love Warriors Cats. Scratchstar is my own personal Warriors OC. May as well tell a bit about him. He is the SkyClan leader after Leafstar. He is a large, fluffy maine coon. He is very temperamental and opinionated. He is easily frustrated, independent, and hates working with partners. Honestly, they just steal your prey on patrols! His personality letters are ENFP. He is a strong leader who never backs down, and has lead SkyClan to victory many times. He is brown with white highlights, thin orange stripes, and huge white paws. His belly and chest fur are also white, as well as his tail tip. He has shredded ears, and one scar the reaches from his right ear past his right eye, and one one his shoulder and back leg. There are also other scars, but they aren't as important. His eyes are slightly different shades of crystal clear blue- his right is a bit more aqua than his left. And that's Scratchstar for ya!",
				  "role":"1", //1:member 2: staff
				  "is_onboarding":"0",
				  "birthdate":"15 September 1983",
				  "gender":"Female",
				  "country":"Indonesia",
				  "city":"Bogor",
				  "province":"Jawa Barat",
				  "sosmed":["fb","twitter","ig"],
				  "is_active":"1",
				  "read":"10",
				  "review":"9",
				  "rating":"11",
				  "pictures":"user.jpg",
				  "friend":"1"}
				  ];
	$scope.authors = [{"id":"AU001",
					  "name":"Thomas Taylor",
					  "member":"Maret 2017",
					  "description":"Thomas Henry Taylor (born 22 May 1973) is a British children's writer and illustrator. He studied at Anglia Ruskin University. He painted the cover art for the first edition of Harry Potter and the Philosopher's Stone. Due to the number of questions regarding the identity of the wizard illustrated on the back cover of the first edition of Harry Potter and the Philosopher's Stone, and thanks to the contribution of an Argentine named Alfonso Ferrer in Taylor's blog, in February 2016, he decided to name him Robertus Tallis.",
					  "picture":"author1.jpg",
					  "genres":["BKG02","BKG01"]
					  },
					  {"id":"AU002",
					  "name":"Jonny Duddle",
					  "member":"Maret 2014",
					  "description":"Uhuy",
					  "picture":"author2.jpg",
					  "genres":["BKG02","BKG01"]
					  },
					  {"id":"AU003",
					  "name":"Mary GrandPré",
					  "member":"Maret 2011",
					  "description":"Educated at the Minneapolis College of Art and Design, Mary GrandPre began her career as a conceptual illustrator for local editorial clients. Continually experimenting with media, Mary underwent many artistic changes in her expressive visual form. Her concerns for light, color, drawing, and design came together in evocative, ethereal pastel paintings evolving toward a style she now calls 'soft geometry'. Mary's new work attracted corporate advertising and editorial clients. Some of the include: Ogilvy & Mather, BBD&O, Whittle Communications, The Richards Group, Neenah Paper, Atlantic Monthly Magazine, Random House, Berkley, Penguin, Dell and McGraw Hill publishers. Recently, she was featured on the cover of Time Magazine for her work with the Harry Potter Series and also worked as a visionary in the environment/scenery development in Dreamworks animated film Antz Mary's work has received national recognition through awards received from: The Society of Illustrators, Communication Arts, Graphis, Print and Art Direction. Her work was chosen among thousands of illustrators to be on the cover of Showcase 16, and a n article was written about her 'conceptual editorial assignments' in Step-by-Step Graphics. Communications Arts Magazine has also done a 'career retrospective' article in their January/Febuary 200 edition. Additionally, Mary has now illustrated six beatiful children's books and is at work on the seventh. Her book illustration possesses higly personalized lyrical story interpretations and has received very favorable reviews in the national press. It is unusual for an illustrator to work successfully in so many genres of illustration at one time, from advertising and corporate to editorial and children's books. Her reputation is now world renown for her delightfully stunning illustrations.",
					  "picture":"author3.jpg",
					  "genres":["BKG02","BKG01"]
					  },
					  {"id":"AU004",
					  "name":"J.K. Rowling",
					  "member":"Mei 2017",
					  "description":"Although she writes under the pen name J.K. Rowling, pronounced like rolling, her name when her first Harry Potter book was published was simply Joanne Rowling. Anticipating that the target audience of young boys might not want to read a book written by a woman, her publishers demanded that she use two initials, rather than her full name. As she had no middle name, she chose K as the second initial of her pen name, from her paternal grandmother Kathleen Ada Bulgen Rowling. She calls herself Jo and has said, 'No one ever called me 'Joanne' when I was young, unless they were angry.' Following her marriage, she has sometimes used the name Joanne Murray when conducting personal business.",
					  "picture":"author4.jpg",
					  "genres":["BKG10","BKG11","BKG13","BKG03"]
					  },
					  {"id":"AU005",
					  "name":"Jack Thorne",
					  "member":"Mei 2017",
					  "description":"Born in Bristol, England, he has written for radio, theatre and film, most notably on the TV shows Skins, Cast-offs, This Is England '86, This Is England '88, This Is England '90, The Fades, The Last Panthers and the feature film The Scouting Book for Boys. He currently lives in London.",
					  "picture":"author5.jpg",
					  "genres":["BKG10","BKG11","BKG13","BKG03"]
					  },
					  {"id":"AU006",
					  "name":"John Tiffany",
					  "member":"Mei 2017",
					  "description":"John Tiffany trained at Glasgow University gaining an MA in Theatre and Classics. He was Literary Director for the Traverse Theatre, Associate Director for Paines Plough and a founding Associate Director for the National Theatre of Scotland. He is currently an Associate Director for the Royal Court Theatre. During 2010-11 John was a Radcliffe Fellow at Harvard University.",
					  "picture":"author6.jpg",
					  "genres":["BKG10","BKG11","BKG13","BKG03"]
					  },
					  {"id":"AU007",
					  "name":"Kazu Kibuishi",
					  "member":"Maret 2013",
					  "description":"Uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG02","BKG01"]
					  },
					  {"id":"AU008",
					  "name":"Jim Kay",
					  "member":"Maret 2013",
					  "description":"Uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG02","BKG01"]
					  },
					  {"id":"AU009",
					  "name":"Cliff Wright",
					  "member":"Maret 2014",
					  "description":"Uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG02","BKG01"]
					  },
					  {"id":"AU010",
					  "name":"Giles Greenfield",
					  "member":"Maret 2014",
					  "description":"Uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG02","BKG01"]
					  },

					  {"id":"AU010",
					  "name":"Ockto Baringbing",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU011",
					  "name":"Hendry Prasetya",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU012",
					  "name":"Eko Puteh",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU013",
					  "name":"Imam E. Wibowo",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU014",
					  "name":"Zefanya Langkan Maega",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU015",
					  "name":"Agri Karuniawan",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },

					  {"id":"AU016",
					  "name":"Cahyo Widiyatmoko",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },

					  {"id":"AU017",
					  "name":"M. Arief Russanto",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU018",
					  "name":"Ricky Novaldo",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },

					  {"id":"AU019",
					  "name":"Hisanori Kato",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU020",
					  "name":"Ucu Fadhilah",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },

					  {"id":"AU021",
					  "name":"Sweta Kartika",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU022",
					  "name":"Alex Irzaqi",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU023",
					  "name":"Andry Chang",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  					  
					  {"id":"AU024",
					  "name":"Rui Nauru",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU025",
					  "name":"Heru S. Zainurma",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU026",
					  "name":"Shinta Bella Agustina",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU027",
					  "name":"Barhan",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU028",
					  "name":"Cybeast",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU029",
					  "name":"Fardrake",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU030",
					  "name":"Harbowoputra",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU031",
					  "name":"Wednesday Ash",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU032",
					  "name":"Rakaputra Paputungan",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU033",
					  "name":"Nurfadli Mursyid",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  },
					  
					  {"id":"AU034",
					  "name":"Adolfo Muñoz García y Nieves Martín Azofra ",
					  "member":"June 2017",
					  "description":"uhuy",
					  "picture":"logo_grey.jpg",
					  "genres":["BKG04"]
					  }];
	$scope.signin = function(){
		var id; var username; var email; var is_onboarding;var fullname;

		$.each($scope.users, function(i, item) {
		    //console.log("name:"+item.email);
		    if(item.email == $scope.email && item.password == $scope.password){
				id = item.id; username = item.username; email = item.email; is_onboarding=item.is_onboarding;
				fullname = item.firstname+"-"+item.middlename+"-"+item.lastname;
				fullname = fullname.split(' ').join('-');
		    }
		});
		$http.post(basepath+"index.php/user/signin",{"email":email,"id":id,"username":username,"is_onboarding":is_onboarding,"fullname":fullname})
		.success(function(data, status, headers, config) {
			//$log.info(data);
			if(!jQuery.isEmptyObject(data)){
				$(location).attr('href', basepath+"index.php/feeds")
			}else{
				alert("Username or password incorrect");
			}
		}).error(function(data, status, headers, config) {
		    $scope.status = status;
		});
	};

	$scope.checkOnBoard = function($sessionid,$modalid){
		$.each($scope.users, function(i, item) {
		    //console.log("name:"+item.email);
		    if(item.id == $sessionid){
				//$scope.list = $scope.users;
				if(item.is_onboarding == 0){
					//$($modalid).modal("show");
				}
		    }
		});
  	};

  	$scope.fetchAllUsers = function(){  		
  		$scope.listusers  = $scope.users;
  	};

  	$scope.detailuser = function(id){
  		$.each($scope.users, function(i, item) {
		    if(item.id == id){
				$scope.myprofile = item;	
		    }
		});
  	};
  	
  	$scope.detailauthor = function(id){
  		$.each($scope.authors, function(i, item) {
		    if(item.id == id){
				$scope.authordetail = item;	
		    }
		});
  	};

  	$scope.friendsOfMyFriends = function(id){
  		$.each($scope.users, function(i, item) {
		    if(item.id == id){
				$scope.myfriends = item;	
		    }
		});
  	};
  	
  	$scope.loadAllFriends = function(id){
  		$scope.loadIndex = 12;
  		$scope.result = $scope.users;
  	};

  	$scope.showMoreFriends = function() {
		var content = $scope.users.length;
		if ($scope.loadIndex < content) {
		  $scope.loadIndex += 2;
		}
	};

	$scope.recomAuthorListCarausel = function(carausel,batas=1){  
  		$inner = $(carausel).find(".carousel-inner");
		var n = 0;var div_top = "<div class='carousel-item'>"; var div_end = "</div>"; var div_content = ""; 
		$.each($scope.authors, function(i, item) {
    		div_content += "<div class='std-book'><div class='pp-bk'><div class='rounded-circle' style='width:100%;padding: 50% 50px; background:url("+basepath+"assets/img/authors/"+item.picture+") center center no-repeat #eee;background-size: 100%;'></div></div>";
			div_content += "<div class='bk-dtl'><h3 class='title'><a href='"+basepath+"index.php/author/detail/"+item.name+"/"+item.id+"'>"+item.name+"</a></h3>";
			div_content += "<div class='sinopsis' style='border-top:1px solid #ddd;padding-top:5px;margin-top:5px' >"+item.description+"</div></div></div>";
    		n++
    		
    		if(n == batas){
    			$inner.append(div_top+div_content+div_end);
    			n=0;
    			div_content = "";
    		}
		});
		$inner.find(".carousel-item:first-child").addClass("active");
  	};

}])
 
.controller('BooksController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {

	/*$scope.genres = [{"id":"BKG01","name":"Young Adult","desc":"Young-adult fiction, whether in the form of novels or short stories, has assetsinct attributes that assetsinguish it from the other age categories of fiction. The vast majority of YA stories portray an adolescent as the protagonist, rather than an adult or a child. "},
					{"id":"BKG02","name":"Fiction","desc":"Fiction (abbreviated SF or sci-fi with varying punctuation and capitalization) is a broad genre of fiction that often involves speculations based on current or future science or technology"},
					{"id":"BKG03","name":"Romance","desc":"According to the Romance Writers of America, 'Two basic elements comprise every romance novel: a central love story and an emotionally-satisfying and optimistic ending.' Both the conflict and the climax of the novel should be directly related to that core theme of developing a romantic relationship, although the novel can also contain subplots that do not specifically relate to the main characters' romantic love."},
					{"id":"BKG04","name":"Mystery","desc":"Mystery fiction is a loosely-defined term that is often used as a synonym of detective fiction — in other words a novel or short story in which a detective (either professional or amateur) solves a crime. "},
					{"id":"BKG05","name":"Fantasy","desc":"Fantasy is a genre that uses magic and other supernatural forms as a primary element of plot, theme, and/or setting. Fantasy is generally assetsinguished from science fiction and horror by the expectation that it steers clear of technological and macabre themes, respectively, though there is a great deal of overlap between the three (collectively known as speculative fiction or science fiction/fantasy)"},
					{"id":"BKG06","name":"Thriller","desc":"Thrillers are characterized by fast pacing, frequent action, and resourceful heroes who must thwart the plans of more-powerful and better-equipped villains. Literary devices such as suspense, red herrings and cliffhangers are used extensively."},
					{"id":"BKG07","name":"Suspense","desc":"Suspense is a feeling of uncertainty and anxiety about the outcome of certain actions, most often referring to an audience's perceptions in a dramatic work. Suspense is not exclusive to fiction, though. Suspense may operate in any situation where there is a lead up to a big event or dramatic moment, with tension being a primary emotion felt as part of the situation."},
					{"id":"BKG08","name":"Comedy","desc":""},
					{"id":"BKG09","name":"Horor","desc":"Horror fiction is fiction in any medium intended to scare, unsettle, or horrify the audience. Historically, the cause of the 'horror' experience has often been the intrusion of a supernatural element into everyday human experience."},
					{"id":"BKG10","name":"Adventure","desc":""},
					{"id":"BKG11","name":"Action","desc":""},
					{"id":"BKG12","name":"One Shot","desc":""},
					{"id":"BKG13","name":"Drama","desc":""},
					{"id":"BKG14","name":"Travel","desc":""},
					{"id":"BKG15","name":"Comic","desc":""},
					{"id":"BKG16","name":"Biography","desc":""},
					{"id":"BKG17","name":"Slice of Life","desc":""},
					{"id":"BKG18","name":"Sports","desc":""}
    ];*/

    var pathimg = "assets/img/books/";
	
	$scope.books = [{"id":"BOOKEE001",
					"title":"Harry Potter and the Sorcerer's Stone",
					"alternatetitle":"Harry Potter #1",
					"sinopsis":"Harry Potter's life is miserable. His parents are dead and he's stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he's a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry. After a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry. Though Harry's first year at Hogwarts is the best of his life, not everything is perfect. There is a dangerous secret object hidden within the castle walls, and Harry believes it's his responsibility to prevent it from falling into evil hands. But doing so will bring him into contact with forces more terrifying than he ever could have imagined. Full of sympathetic characters, wildly imaginative situations, and countless exciting details, the first installment in the series assembles an unforgettable magical world and sets the stage for many high-stakes adventures to come.",
					"author":["AU004","AU001","AU002","AU003","AU007","AU008"],
					"authpositions":["Creator","Illustrator","Illustrator","Illustrator","Illustrator","Illustrator"],
					"paperback":"320",
					"publisher":"Scholastic Inc",
					"published":"June 26th 1997",
					"isbn":["0439554934","9780439554930"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book1.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE002",
					"title":"Harry Potter and the Chamber of Secrets",
					"alternatetitle":"Harry Potter #2",
					"sinopsis":"It was always difficult being Harry Potter and it isn't much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children.While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.",
					"author":["AU004","AU009","AU002","AU003","AU007","AU008"],
					"authpositions":["Creator","Illustrator","Illustrator","Illustrator","Illustrator","Illustrator"],
					"paperback":"343",
					"publisher":"Scholastic Inc",
					"published":"July 2nd 1998",
					"isbn":["0751565350","9780751565355"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book2.jpg",
					"tag":"SRHP"},

					{"id":"BOOKEE003",
					"title":"Harry Potter and the Prisoner of Azkaban",
					"alternatetitle":"Harry Potter #3",
					"sinopsis":"Harry Potter's third year at Hogwarts is full of new dangers. A convicted murderer, Sirius Black, has broken out of Azkaban prison, and it seems he's after Harry. Now Hogwarts is being patrolled by the dementors, the Azkaban guards who are hunting Sirius. But Harry can't imagine that Sirius or, for that matter, the evil Lord Voldemort could be more frightening than the dementors themselves, who have the terrible power to fill anyone they come across with aching loneliness and despair. Meanwhile, life continues as usual at Hogwarts. A top-of-the-line broom takes Harry's success at Quidditch, the sport of the Wizarding world, to new heights. A cute fourth-year student catches his eye. And he becomes close with the new Defense of the Dark Arts teacher, who was a childhood friend of his father. Yet despite the relative safety of life at Hogwarts and the best efforts of the dementors, the threat of Sirius Black grows ever closer. But if Harry has learned anything from his education in wizardry, it is that things are often not what they seem. Tragic revelations, heartwarming surprises, and high-stakes magical adventures await the boy wizard in this funny and poignant third installment of the beloved series.",
					"author":["AU004","AU009","AU002","AU003","AU007","AU008","AU034"],
					"authpositions":["Creator","Illustrator","Illustrator","Illustrator","Illustrator","Illustrator"],
					"paperback":"435",
					"publisher":"Scholastic Inc",
					"published":"July 8th 1999",
					"isbn":["043965548X ","9780439655484"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book3.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE004",
					"title":"Harry Potter and the Goblet of Fire",
					"alternatetitle":"Harry Potter #4",
					"sinopsis":"Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup. He wants to find out about the mysterious event that's supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn't happened for a hundred years. He wants to be a normal, fourteen-year-old wizard. But unfortunately for Harry Potter, he's not normal - even by wizarding standards. And in his case, different can be deadly.",
					"author":["AU004","AU010","AU003"],
					"authpositions":["Creator","Illustrator","Illustrator"],
					"paperback":"734",
					"publisher":"Scholastic Inc",
					"published":"September 28th 2002",
					"isbn":["0439139600 ","9780439139601"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book4.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE005",
					"title":"Harry Potter and the Order of the Phoenix",
					"alternatetitle":"Harry Potter #5",
					"sinopsis":"Harry Potter and the Order of the Phoenix is the fifth novel in the Harry Potter series, written by J. K. Rowling. It follows Harry Potter's struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic. The novel was published on 21 June 2003 by Bloomsbury in the United Kingdom, Scholastic in the United States, and Raincoast in Canada. Five million copies were sold in the first 24 hours of publication.[2] It is the longest book of the series. Harry Potter and the Order of the Phoenix has won several awards, including being named an American Library Association Best Book for Young Adults in 2003. The book has also been made into a film, which was released in 2007, and into a video game by Electronic Arts.",
					"author":["AU004","AU003"],
					"authpositions":["Creator","Illustrator"],
					"paperback":"734",
					"publisher":"Scholastic Inc",
					"published":"June 21st 2003",
					"isbn":["0439358078  ","9780439358071"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book5.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE006",
					"title":"Harry Potter and the Half-Blood Prince",
					"alternatetitle":"Harry Potter #6",
					"sinopsis":"When Harry Potter and the Half-Blood Prince opens, the war against Voldemort has begun. The Wizarding world has split down the middle, and as the casualties mount, the effects even spill over onto the Muggles. Dumbledore is away from Hogwarts for long periods, and the Order of the Phoenix has suffered grievous losses. And yet, as in all wars, life goes on. Harry, Ron, and Hermione, having passed their O.W.L. level exams, start on their specialist N.E.W.T. courses. Sixth-year students learn to Apparate, losing a few eyebrows in the process. Teenagers flirt and fight and fall in love. Harry becomes captain of the Gryffindor Quidditch team, while Draco Malfoy pursues his own dark ends. And classes are as fascinating and confounding as ever, as Harry receives some extraordinary help in Potions from the mysterious Half-Blood Prince. Most importantly, Dumbledore and Harry work together to uncover the full and complex story of a boy once named Tom Riddle—the boy who became Lord Voldemort. Like Harry, he was the son of one Muggle-born and one Wizarding parent, raised unloved, and a speaker of Parseltongue. But the similarities end there, as the teenaged Riddle became deeply interested in the Dark objects known as Horcruxes: objects in which a wizard can hide part of his soul, if he dares splinter that soul through murder. Harry must use all the tools at his disposal to draw a final secret out of one of Riddle’s teachers, the sly Potions professor Horace Slughorn. Finally Harry and Dumbledore hold the key to the Dark Lord’s weaknesses... until a shocking reversal exposes Dumbledore’s own vulnerabilities, and casts Harry’s—and Hogwarts’s—future in shadow.",
					"author":["AU004","AU003"],
					"authpositions":["Creator","Illustrator"],
					"paperback":"652",
					"publisher":"Scholastic Inc",
					"published":"July 16th 2005",
					"isbn":["0439785960","9780439785969"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book6.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE007",
					"title":"Harry Potter and the Deathly Hallows",
					"alternatetitle":"Harry Potter #7",
					"sinopsis":"Its no longer safe for Harry at Hogwarts, so he and his best friends, Ron and Hermione, are on the run. Professor Dumbledore has given them clues about what they need to do to defeat the dark wizard, Lord Voldemort, once and for all, but it's up to them to figure out what these hints and suggestions really mean. Their cross-country odyssey has them searching desperately for the answers, while evading capture or death at every turn. At the same time, their friendship, fortitude, and sense of right and wrong are tested in ways they never could have imagined. The ultimate battle between good and evil that closes out this final chapter of the epic series takes place where Harry's Wizarding life began: at Hogwarts. The satisfying conclusion offers shocking last-minute twists, incredible acts of courage, powerful new forms of magic, and the resolution of many mysteries. Above all, this intense, cathartic book serves as a clear statement of the message at the heart of the Harry Potter series: that choice matters much more than destiny, and that love will always triumph over death.",
					"author":["AU004","AU003"],
					"authpositions":["Creator","Illustrator"],
					"paperback":"759",
					"publisher":"Arthur A. Levine Books",
					"published":"July 21st 2007",
					"isbn":["0545010225 ","9780545010221"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book7.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE008",
					"title":"Harry Potter and the Cursed Child - Parts One and Two",
					"alternatetitle":"Harry Potter #8",
					"sinopsis":"Based on an original new story by J.K. Rowling, Jack Thorne and John Tiffany, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play will receive its world premiere in London’s West End on July 30, 2016. It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children. While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.",
					"author":["AU006","AU005","AU004"],
					"authpositions":["Script","Story","Story"],
					"paperback":"343",
					"publisher":"Arthur A. Levine Books",
					"published":"July 21st 2007",
					"isbn":["0751565350 ","9780751565355"],
					"genres":["BKG05","BKG01","BKG02"],
					"type":"Hardcover",
					"statusbook":"completed",
					"language":"English",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book8.jpg",
					"tag":"SRHP"},
					
					{"id":"BOOKEE009",
					"title":"Bima Satria Garuda",
					"alternatetitle":"Bima Satria Garuda #1",
					"sinopsis":"Ray Bramasakti tidak menduga bahwa saat sedang bertamasya bersama Rena, sebuah meteor jatuh di dekat tempat mereka duduk. Dari dalam meteor tersebut muncul seorang mahluk asing yang sedang dikepung oleh gerombolan monster. Ray berusaha menolong orang tersebut melarikan diri, tetapi mereka akhirnya tertangkap. Pada saat itulah mahluk asing tersebut memberikan kekuatan kepada Ray untuk berubah. Menjadi seorang pahlawan super bernama Bima Satria Garuda ",
					"author":["AU010","AU011","AU012","AU013"],
					"authpositions":["Script & Storyboard","Penciller & Inker","Colorist","Letterer & Design"],
					"paperback":"652",
					"publisher":"Alfamart",
					"published":"January 2013",
					"isbn":["9786029946697"],
					"genres":["BKG15","BKG01","BKG10","BKG11"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book9.jpg",
					"tag":"SRBSG"},
					
					{"id":"BOOKEE010",
					"title":"Bima Satria Garuda: Versus Topeng Besi ",
					"alternatetitle":"Bima Satria Garuda #2",
					"sinopsis":"Tidak cukup hanya menghancurkan Monas, Topeng Besi menyekap banyak manusia bumi untuk dijadikan budak di negeri Vudo, termasuk Randy, kakak Ray dan Rena! Mampukan BIMA Satria Garuda mengalahkan Topeng Besi untuk menyelamatkan Randy dan tawanan lainnya?",
					"author":["AU010","AU011","AU014","AU013"],
					"authpositions":["Script & Storyboard","Penciller & Inker","Colorist","Letterer & Design"],
					"paperback":"32",
					"publisher":"Alfamart",
					"published":"December 2013",
					"isbn":["9786021474006"],
					"genres":["BKG15","BKG01","BKG10","BKG11"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book10.jpg",
					"tag":"SRBSG"},
					
					{"id":"BOOKEE011",
					"title":"Bima Satria Garuda: Versus Monster Gremontis",
					"alternatetitle":"Bima Satria Garuda #3",
					"sinopsis":"Tidak cukup hanya menghancurkan Monas, Topeng Besi menyekap banyak manusia bumi untuk dijadikan budak di negeri Vudo, termasuk Randy, kakak Ray dan Rena! Mampukan BIMA Satria Garuda mengalahkan Topeng Besi untuk menyelamatkan Randy dan tawanan lainnya?",
					"author":["AU010","AU015","AU014","AU013"],
					"authpositions":["Script & Storyboard","Penciller & Inker","Colorist","Letterer & Design"],
					"paperback":"32",
					"publisher":"Alfamart",
					"published":"December 2013",
					"isbn":["9786021474006"],
					"genres":["BKG15","BKG01","BKG10","BKG11"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book11.jpg",
					"tag":"SRBSG"},
					
					{"id":"BOOKEE012",
					"title":"SIJI - Serikat Jagoan Indonesia",
					"alternatetitle":"",
					"sinopsis":"Diawali dari penelitian Profesor Bratanala meneliti sebab akibat dua meteor yang telah jatuh ke bumi yang salah satu meteor tersebut berimbas kepada Arya menjadi sosok manusia api. Diantara meteor itu mengandung sukma jahat yang kemudian menjadikan entitas jahat semakin berkembang dan sulit untuk dibendung. Pertemuan antara Winda dengan Gunturgen mengawali berkumpulnya para jagoan-jagoan super hero Indonesia seperti Aryageni, Blacan dan Zantoro. Namun berkumpulnya mereka tidaklah melalui proses yang mudah begitu saja, dikarenakan setiap jagoan super hero memiliki ego sendiri-sendiri sebesar kekuatannya masing-masing. Bukan hanya para jagoan, para penjahat kelas kakap pun seperti Zodet dan Badar ingin bersinergi untuk tujuan memperkuat sindikat kejahatan mereka. Para jagoan-jagoan itu berkerja keras untuk menghalau entitas jahat yang ingin menguasai. Kekuatan-kekuatan supranatural pun turut berbicara dalam kisah ini. Kelima jagoan Winda, Gunturgen, Aryageni, Blacan dan Zantoro sangat sulit bertahan untuk membendung entitas jahat ini, bahkan mereka para jagoan-jagoan itu menjadi tidak berdaya samasekali.. !?",
					"author":["AU016","AU017","AU018"],
					"authpositions":["Illustrator","Illustrator","Illustrator"],
					"paperback":"113",
					"publisher":"Jagoan Comics",
					"published":"October 2008",
					"isbn":[""],
					"genres":["BKG15","BKG01","BKG10","BKG11"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","Book Play"],
					"picture":pathimg+"book12.jpg",
					"tag":"SRSIJI"},

					{"id":"BOOKEE013",
					"title":"Kangen Indonesia: Indonesia di Mata Orang Jepang",
					"alternatetitle":"",
					"sinopsis":"Seorang pengelana Jepang merasa heran orang Indonesia sering bilang 'tidak apa-apa' untuk hal-hal yang baginya justru 'apa-apa'. Mengomentari teman yang tak menepati janji, orang Indonesia biasanya hanya bilang, 'Ya, sudah, tidak apa-apa'. Bus terlambat datang, 'Tidak apa-apa...'. Internet tak bisa nyambung-nyambung pun, 'Tak apa-apa'. Lewat buku ini Hisanori Kato, si pengelana Jepang, berbagi pengalaman pribadi. Masih ada seribu satu 'keanehan' lain ia temui saat dua kali tinggal sementara di Indonesia. Tanpa maksud menyinggung perasaan, ia tak habis pikir pada manusia Indonesia yang menurut kacamata Jepangnya kurang menghargai waktu serta menganut cara berpikir 'bagaimana nanti', bukannya 'nanti bagaimana'. Kato San kini sudah tinggal lagi di negeri asalnya. Namun, ia tetap tak bisa melupakan orang-orang yang pernah dikenalnya di Indonesia. Ia pun masih selalu rindu pada warung dekat rumah tumpangannya yang dulu kerap dikunjungi. Jakarta telah menjadi kampung halamannya yang kedua.",
					"author":["AU019","AU020"],
					"authpositions":["Creator","Translator"],
					"paperback":"144",
					"publisher":"Kompas",
					"published":"October 2012",
					"isbn":["9789797096755"],
					"genres":["BKG14","BKG03","BKG13"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","KOBO"],
					"picture":pathimg+"book13.jpg",
					"tag":"SRKID"},
					
					{"id":"BOOKEE014",
					"title":"Pendekar Tongkat Emas: Lembah Angin",
					"alternatetitle":"",
					"sinopsis":"Penduduk desa di suatu lembah sunyi dibantai habis oleh gerombolan Macan Galing demi sebuah kabar angin. Konon di lembah itu terdapat sumber mata air yang bisa memberikan hidup abadi bagi siapa pun yang meminumnya. Cempaka yang tengah terluka dan berniat mencari pertolongan di desa itu, terjebak di tengah gerombolan pendekar golongan hitam yang juga menginginkan tongkat emas legendaris yang disandangnya.",
					"author":["AU021","AU022"],
					"authpositions":["Storyboard","Illustrator"],
					"paperback":"",
					"publisher":"Ragasukma, m&c!",
					"published":"December 2014",
					"isbn":[""],
					"genres":["BKG15","BKG01","BKG08","BKG10"],
					"type":"Online",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","KOBO"],
					"picture":pathimg+"book14.jpg",
					"tag":"SRPTE"},
					
					{"id":"BOOKEE015",
					"title":"Legenda Imaji Nusantara",
					"alternatetitle":"LEINA",
					"sinopsis":"Aku bangkit dari petilasanku dan bergerak secepat angin menuju Kihara Hayang. Di sana aku terhenyak menemukan kabuyutan tempat keempat Purba bersemayam telah runtuh. Tidak ada yang tersisa selain batu-batu berserakan ke segala penjuru. Aku murka. Aku marah. Aku ingin menghancurkan siapa saja yang telah berani menghancurkan tempat suci itu. Kumpulan Cerpen LEINA merupakan karya pertama yang di keluarkan LiNE melalui seleksi ketat yang diikuti puluhan member. Hingga akhirnya terpilih 15 member beserta karyanya yang telah 'terukir' di dalam antologi LEINA. Komedi, ketegangan, rasa haru tercampur dalam antologi ini. Mengusung tema 'nusantara myth' yang dikemas secara fleksibel sehingga membuat pembaca tak perlu mengernyitkan dahi untuk memahami isi dari cerita yang ada.  Anda juga bisa menikmati beberapa kisah nusantara dalam porsi parody tanpa harus kehilangan dari makna asli dari cerita itu.",
					"author":["AU023","AU024","AU025","AU026"],
					"authpositions":["Creator","","",""],
					"paperback":"224",
					"publisher":"Kalimaya Publishing ",
					"published":"August 22 2015",
					"isbn":["9786022840886"],
					"genres":["BKG15","BKG01","BKG08","BKG10"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","BOBO","KOBO"],
					"picture":pathimg+"book15.jpg",
					"tag":"SRLEI"},

					{"id":"BOOKEE016",
					"title":"Sendawa di Antariksa",
					"alternatetitle":"",
					"sinopsis":"Selamat datang di Serambi Bumi. Tempat singgah sekitar sabuk asteroid Bintang Douglas-Kirk di Nebula Bova yang paling menyerupai suasana Bumi. Temukan berbagai destinasi wisata unik selama Anda transit menuju planet lain, beragam spesies yang mirip dan tidak mirip manusia, dan 7 cerita pendek kehidupan di Stasiun Nurtanio. Nikmati ilustrasi segar seperti gelembung soda di tiap cerita. Mau Pepstar atau Comet-Cola, selera Anda bisa didapat di sini!",
					"author":["AU027","AU028","AU029","AU030"],
					"authpositions":["Author"],
					"paperback":"200",
					"publisher":"Rimawarna ",
					"published":"August 2016",
					"isbn":[""],
					"genres":["BKG15","BKG08"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","KOBO"],
					"picture":pathimg+"book16.jpg",
					"tag":"SRSA"},
					
					{"id":"BOOKEE017",
					"title":"GET HYPE!! - a Cloverlines Story ",
					"alternatetitle":"",
					"sinopsis":"Aimi Hoshikawa dan band-nya, Cloverlines di-book untuk bermain di pentas olahraga dan musik terbesar segalaksi, Hyper Bowl! Tapi, oh no! Aimi tak sengaja menyinggung milyaran penduduk Tata Surya ketika ia dikira menganggap Rinne, mesin penabuh drum Cloverlines setara dengan Natsume Mirai, sang AI juru selamat jagat raya!",
					"author":["AU031","AU027","AU032"],
					"authpositions":["Author"],
					"paperback":"324",
					"publisher":"Scroll Down Comics & Rimawarna",
					"published":"September 2nd 2017",
					"isbn":[""],
					"genres":["BKG15","BKG01","BKG04","BKG10"],
					"type":"Paperback",
					"statusbook":"completed",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","KOBO"],
					"picture":pathimg+"book17.jpg",
					"tag":"SRCS"},
					
					{"id":"BOOKEE018",
					"title":"Tahilalats",
					"alternatetitle":"Komik Tahilalats",
					"sinopsis":"Kumpulan komik strip Tahilalats yang belum pernah diunggah ke dunia maya ini menceritakan berbagai potret tingkah polah remaja, yang dibuat menjadi absurd dan nyeleneh, khas Tahilalats.",
					"author":["AU033"],
					"authpositions":["Author"],
					"paperback":"",
					"publisher":"Webtoon",
					"published":"September 2014",
					"isbn":[""],
					"genres":["BKG15","BKG08"],
					"type":"Online",
					"statusbook":"Ongoing",
					"language":"Indonesian",
					"copy":["Amazon","Apple iBook","KOBO"],
					"picture":pathimg+"book18.jpg",
					"tag":"SRTHL"}
				];

	$scope.collection = [{"id":"CLBK001",
						  "name":"Best action comic ever",
						  "list":["BOOKEE009","BOOKEE010","BOOKEE011","BOOKEE014","BOOKEE017","BOOKEE018"],
						  "desc":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."},
						  {"id":"CLBK002",
						  "name":"Favorite Books",
						  "list":["BOOKEE001","BOOKEE002","BOOKEE003","BOOKEE004","BOOKEE005","BOOKEE006","BOOKEE007","BOOKEE008"],
						  "desc":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."},
						  ];

	$scope.discussbooks = [{"id":"DBK001",
							"bookid":"BOOKEE002",
							"userid":"290292",
							"title":"Why do most people dislike The Death Cure? (MAJOR SPOILERS) ",
							"discuss":"Well....I have a few things I'd like a change for. There was no test and I liked reading about them. And yes..some questions weren't answered. Where exactly were they in the world? Was it in the future or what? But I really wanted to know how Minho would react to Newt's death. I was disappointed when that wasn't mentioned. But I still liked the book. It was an awesome series.",
							"viewers":"3890",
							"isquestion":"1",
							"answering":[{"userid":"10001",
										  "answered":"Yes because Newt died, but I'm team Brenda since the Scorch so I don't mind if Teresa died. :)",
										  "isright":"0"},
										{"userid":"10003",
										  "answered":"Do not say I didn't warn you people",
										  "isright":"1"}]
							},
							{"id":"DBK002",
							"bookid":"BOOKEE002",
							"userid":"10004",
							"title":"The Big Bang ",
							"discuss":"The Maze Runner by James Dashner, is about a 16 year old boy named Thomas that finds himself in a new reality, a maze, additionally not remembering anything of his past except his name, and it is up to Thomas and the other confused teenagers he is held up with to seek their way out of the maze. ",
							"viewers":"90",
							"isquestion":"0",
							"answering":null
							},
							{"id":"DBK003",
							"bookid":"BOOKEE004",
							"userid":"10002",
							"title":"do you want newt to live in the death cure movie (maze runner 3) or for it to stay true to the books",
							"discuss":"it's hard because I hate when movies don't stay true to the books but this is newt like he was my favourite character i cried my eyes out on page 250 and wanted to tear it out and pretend it never existed because I was that mad upset broken I don't really know the word to explain it so my answer would be yes I want him to live because it would tear me apart to have to watch Thomas pull that trigger as newt begged for death",
							"viewers":"132",
							"isquestion":"0",
							"answering":[{"userid":"10004",
										  "answered":"I will, even tho I said it first, I'm saying it again",
										  "isright":"0"},
										{"userid":"10003",
										  "answered":"You just got the idea I had of Maze Crazies? Get out mate.",
										  "isright":"0"}]
							},
							{"id":"DBK004",
							"bookid":"BOOKEE009",
							"userid":"290292",
							"title":"Touching Spirit Bear/Ghost of Spirit Bear",
							"discuss":"Has anyone else read both and felt like you were just reading different adventures about the same duo?",
							"viewers":"932",
							"isquestion":"0",
							"answering":null
							},
							{"id":"DBK005",
							"bookid":"BOOKEE002",
							"userid":"290292",
							"title":"What do we (Maze Runner fans) call ourselves?",
							"discuss":"I was thinking and I was just wondering what we call ourselves. Any ideas?",
							"viewers":"313",
							"isquestion":"1",
							"answering":[{"userid":"10001",
										  "answered":"Haha, I just made them up but I like Gladers the best. ",
										  "isright":"0"},
										{"userid":"10003",
										  "answered":"I will, even tho I said it first, I'm saying it again ",
										  "isright":"1"}]
							}];

	$scope.fetchAllBook = function(){  		
		$scope.loadIndex = 2;
  		$scope.books  = $scope.books;
  	};

  	$scope.fetchAllCollectionBook = function(){  		
  		$scope.collection  = $scope.collection;
  	};

  	
	$scope.fetchAllBookByGenres = function($genre){  		
  		if($genre == null){
  			$scope.gbooks  = $scope.books;
  		}else{
  			var book_ = [];
  			$.each($scope.books, function(i, item) {
  				$.each(item.genres,function(j,v){
	  				if(v == $genre){
						book_.push(item);
					}
				});
			});
			$scope.gbooks = book_;

  		}
  	};
  	
  	$scope.fetchBooksListCarausel = function(carausel,batas=4){  		
		$inner = $(carausel).find(".carousel-inner");
		var n = 0;var div_top = "<div class='carousel-item'>"; var div_end = "</div>"; var div_content = ""; 
		$.each($scope.books, function(i, item) {
    		div_content += "<div class='bkl pull-left'><p class='title'><a href='"+basepath+"index.php/book/show/"+item.id+"'>"+item.title+"("+item.alternatetitle+")</a></p><img src='"+basepath+item.picture+"' class='d-block' /></div>";
    		n++
    		
    		if(n == batas){
    			$inner.append(div_top+div_content+div_end);
    			n=0;
    			div_content = "";
    		}
		});
		$inner.find(".carousel-item:first-child").addClass("active");
  	};

  	$scope.recomBooksListCarausel = function(carausel,batas=1){  
  		$inner = $(carausel).find(".carousel-inner");
		var n = 0;var div_top = "<div class='carousel-item'>"; var div_end = "</div>"; var div_content = ""; 
		$.each($scope.books, function(i, item) {
    		div_content += "<div class='std-book'><div class='pp-bk'><img src='"+basepath+item.picture+"'></div>";
			div_content += "<div class='bk-dtl'><h3 class='title'><a href='"+basepath+"index.php/book/show/"+item.id+"'>"+item.title+"</a></h3><p class='alternate'>"+item.alternatetitle+"</p>";
			div_content += "<p class='authors'>by <span><a href=''>"+item.author+"</a></span> </p><hr>";
			div_content += "<div class='sinopsis'>"+item.sinopsis+"</div></div></div>";
    		n++
    		
    		if(n == batas){
    			$inner.append(div_top+div_content+div_end);
    			n=0;
    			div_content = "";
    		}
		});
		$inner.find(".carousel-item:first-child").addClass("active");
  	};

  	$scope.detailbooks = function(id){
		$.each($scope.books, function(i, item) {
			if(item.id == id){
				$scope.detailbook = item;
			}
		});
	};
	
	$scope.modalDetailbooks = function(id,modal){
		var detailbook = null;
		$.each($scope.books, function(i, item) {
			if(item.id == id){
				detailbook = item;
			}
		});
		//$log.info(detailbook);
		$(modal).modal("show");
		$(modal).find(".modal-title").text(detailbook.title);
		$(modal).find(".pic-book").attr("src",basepath+detailbook.picture);
		$(modal).find(".sinopsis").html(detailbook.sinopsis);
	};

	$scope.fetchAllBookByAuthor = function(id){
		//$scope.bookauthor=null;
		var book_ = [];
		$.each($scope.books, function(i, item) {
			$.each(item.author,function(j,v){
				//$log.info(v+"="+id);
				if(v == id ){
					book_.push(item);
				}
			});
		});
		$scope.bookauthor = book_;
	};
	
	$scope.fetchBookByAuthor = function(id,idbook){
		//$scope.bookauthor=null;
		var book_ = [];
		if(idbook != null){
			$.each($scope.books, function(i, item) {
				if(idbook != item.id){
					$.each(item.author,function(j,v){
						//$log.info(v+"="+id);
						if(v == id ){
							book_.push(item);
						}
					});
				}
			});
			$scope.bookauthor = book_;
		}
	};

	
	$scope.fetchBookBySeries = function(code,idbook){
		if(idbook != null){
  			var book_ = [];
  			$.each($scope.books, function(i, item) {
  				if(item.tag == code && item.id != idbook){
  					book_.push(item);
				}
			});
			$scope.seriesbook = book_;			
  		}
	};
	
	$scope.fetchAllGenres = function(){  		
  		$http.post(basepath+"index.php/genre/jsnFetchAll")
		.success(function(data, status, headers, config) {
			$log.info(data);
			$scope.genres = data;
		}).error(function(data, status, headers, config) {
		    $scope.status = status;
		});
  	};

	$scope.detailgenres = function(id){
		//$log.info(id);
		$.each($scope.genres, function(i, item) {
			if(item.id == id){
				$scope.detailgenre = item;
				//$log.info($scope.detailgenre);
			}
		});
	};

	$scope.openmodalbook = function(modal,id,title){
		$(modal).modal("show");
		$scope.detailbooks(id);
  	};

  	$scope.fetchAllDiscuss = function(){  		
  		$scope.discussbooks  = $scope.discussbooks;
  	};

  	$scope.detailDiscussBooks = function(id){
		$.each($scope.discussbooks, function(i, item) {
			if(item.id == id){
				$scope.detaildiscussbook = item;
			}
		});
	};
	
  	$scope.detailDiscussByBooks = function(id){
		var dcbook = [];
		$.each($scope.discussbooks, function(i, item) {
			if(item.bookid == id){
				dcbook.push(item);
			}
		});
		$scope.detaildcbook = dcbook;
		//$log.info($scope.detaildcbook);
	};

	$scope.viewbookbylayout = function($layout){  		
		var btnlst = $("#v-slc");
		var pnllayout = $("#layout-selected");
		btnlst.find("li").removeClass("active");
		btnlst.find("li.v-"+$layout).addClass("active");
		pnllayout.html("loading");
		if($layout == 'list'){
  			pnllayout.empty();
  			var thead = "<table id='tab-col-list' class='table'>"+
  						"<tbody><tr><td></td>"+
  								   "<td></td>"+
  								   "<td></td>"+
  								   "</tr></tbody>";
  			var endtab = "</table>";
  			var incl = "<?php $this->load->view('profile/authors/last-activity/index');?>";
  			pnllayout.append(incl);
  		}else if($layout == 'detail'){
  			//alert("detail");  			
  		}else{
  			//tile
  			//alert("tile");  			
  		}
  	};

}])

.controller('CommentController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {
		
	$scope.comments = [{"id":"CMN001",
						"name":"Asep",
						"user_id":"10002",
						"comment":"This book was recommended for fans of the Hunger Games series, a series that has become one of my favorites. I began The Maze Runner excitedly, hoping for an equally enjoyable, dystopian adventure. I didn't find it.",
						"created":"Oct 17, 2017"},
						{"id":"CMN002",
						"name":"Febry",
						"user_id":"290292",
						"comment":"You know how sometimes you're running really fast from a horrible creature and, in a moment of panic, you turn around to see how close it is only to run straight into a brick wall? <br>No? <br>I don't know what that's like either.<br>But that inattention to detail would probably totally screw you over because a.) now you're knocked unconscious and b.) the creature is going to devour you. Good job.",
						"created":"Oct 16, 2017"},
						{"id":"CMN003",
						"name":"aska",
						"user_id":"10001",
						"comment":"Have you ever had an eight-year-old kid try to describe to you winning a level of a video game? Have you ever had a middle-aged man try to describe to you completing the games section of the New York Times?",
						"created":"Oct 16, 2017"},
						{"id":"CMN004",
						"name":"Aku",
						"user_id":"10003",
						"comment":"It's funny how just a few years can change everything - your reading tastes, your expectations, your standards... because when I read The Maze Runner in early 2011, I enjoyed it a lot. It seemed fast-paced, exciting and a little scary. Plus, I thought the slang was a nice touch.",
						"created":"Oct 15, 2017"},
						{"id":"CMN005",
						"name":"Asep bin Jokowow",
						"user_id":"10004",
						"comment":"Okay so before I start I want to say something.I personally hesitated to read this book because I heard too many bad reviews and things about this book.But let me tell you something.Yeah it has it's problems like the written style but this book has one of the best story plots I have ever read about.And believe,once you get into the book,you will not care about the writing or anything else.I am seriously so angry I haven't read this book early and even more for listening or reading those really",
						"created":"Oct 15, 2017"},
						{"id":"CMN006",
						"name":"Jokowow",
						"user_id":"10004",
						"comment":"When I'm sick - the snotty phlegmy febrile kind of sick - and my brain feels sizzlingly fried, I sometimes turn to easy reading 'fluff' to give my neurons a break. Sometimes this strategy backfires and the 'fluffy' book actually tries to break my long-suffering brain cells with its sheer stupidity.",
						"created":"Oct 15, 2017"},
						{"id":"CMN007",
						"name":"Dangdut",
						"user_id":"10004",
						"comment":"I am way better at writing reviews for books I hated, but I’m gonna give it a go anyway.",
						"created":"Oct 15, 2017"}];

	$scope.fetchAllComments = function(){  		
		$scope.commentlist  = $scope.comments;
  	};

}])


.controller('FeedsController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {

	$scope.feeds = [{"id":"FDS001",
					  "userid":"USR001",
					  "status":"wants to read",
					  "bookid":"BOOKEE001",
					  "review":[""],
					  "friends":"",
					  "author":""
				  	},
				  	{"id":"FDS002",
					  "userid":"USR002",
					  "status":"currently reading",
					  "bookid":"BOOKEE009",
					  "review":[""],
					  "friends":"",
					  "author":""
				  	},
				  	{"id":"FDS003",
					  "userid":"USR004",
					  "status":"is now friends with",
					  "bookid":"",
					  "review":[""],
					  "friends":"USR001",
					  "author":""
				  	},
				  	{"id":"FDS004",
					  "userid":"USR004",
					  "status":"wrote a review",
					  "bookid":"BOOKEE015",
					  "review":["4","Direktur Jenderal Bea dan Cukai Heru Pambudi menjelaskan, aturan tersebut akan berlaku pada 1 Juli 2018. Heru menjelaskan peraturan pelaksanaanya akan segera keluar bulan ini dan berbentuk peraturan Dirjen (Perdirjen)"],
					  "friends":[""],
					  "author":""
				  	},
				  	{"id":"FDS005",
					  "userid":"USR003",
					  "status":"wrote a review",
					  "bookid":"BOOKEE011",
					  "review":["3","Direktur Jenderal Bea dan Cukai Heru Pambudi menjelaskan, aturan tersebut akan berlaku pada 1 Juli 2018. Heru menjelaskan peraturan pelaksanaanya akan segera keluar bulan ini dan berbentuk peraturan Dirjen (Perdirjen)"],
					  "friends":"",
					  "author":""
				  	},
				  	{"id":"FDS006",
					  "userid":"USR001",
					  "status":"is now following",
					  "bookid":"",
					  "review":[""],
					  "friends":"",
					  "author":"AU004"
				  	},
				  	{"id":"FDS007",
					  "userid":"USR005",
					  "status":"wants to read",
					  "bookid":"BOOKEE014",
					  "review":[""],
					  "friends":"",
					  "author":""
				  	}];

  	$scope.fetchAllFeeds = function(){  		
  		$scope.alfeeds  = $scope.feeds;
  	};

  	$scope.detailfeed = function(id){
		$.each($scope.feeds, function(i, item) {
			if(item.id == id){
				$scope.detailfeed = item;
			}
		});
	};



}])



.controller('ActionController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {

	$scope.changebuttonFriends = function(event){ 
		if( event.data('liked') ){
            event.data('liked', false);
            event.toggleClass("btn-info btn-light");
            event.html("<i class='fa fa-user-o'></i><sub><i class='fa fa-remove'></i></sub> Unfriend");
        }
        else{
            event.data('liked', true);
            event.toggleClass("btn-light btn-info");
            event.html("<i class='fa fa-user-o'></i><sub><i class='fa fa-plus'></i></sub> Add friend");
        }
  	};

  	$scope.openmodal = function(modal){
		$(modal).modal("show");
  	};
  	$scope.goto = function(url){
		$(location).attr('href', url)
  	};


}])

.controller('GroupsController', ['$scope', '$http', '$log','$interval','$compile','$filter','$location',
	function($scope, $http, $log, $interval,$compile,$filter,$location) {
	$scope.groups = [{"id":"GRP001",
					  "name":"The eyes of the world",
					  "desc":"The Eye of the World is a spot in the Blight created by the male and female Aes Sedai after the Dark One tainted saidin. It was created using both saidin and saidar (the male and female halves of the Power respectively), and is protected by Someshta.",
					  "picture":"gr01.jpg"},
					  {"id":"GRP002",
					  "name":"Three Gorges Dam",
					  "desc":"Three Gorges Dam is a hydroelectric dam that spans the Yangtze River by the town of Sandouping, located in Yiling assetsrict, Yichang, Hubei province, China. The Three Gorges Dam is the world's largest power station in terms of installed capacity (22,500 MW).",
					  "picture":"gr02.jpg"},
					  {"id":"GRP003",
					  "name":"Cabe cabean",
					  "desc":"",
					  "picture":""},
					  {"id":"GRP004",
					  "name":"Teletabis",
					  "desc":"",
					  "picture":"gr04.jpg"},
					  {"id":"GRP005",
					  "name":"The owl of minerva",
					  "desc":"",
					  "picture":"gr08.jpg"},
					  {"id":"GRP006",
					  "name":"Jokers",
					  "desc":"",
					  "picture":"gr06.jpg"},
					  {"id":"GRP007",
					  "name":"Ahokers",
					  "desc":"",
					  "picture":"gr07.jpg"},
					  {"id":"GRP008",
					  "name":"The Doctor",
					  "desc":"",
					  "picture":""},
					  {"id":"GRP009",
					  "name":"Geeks",
					  "desc":"",
					  "picture":"gr05.jpg"},
					  {"id":"GRP010",
					  "name":"Neard",
					  "desc":"",
					  "picture":"gr10.jpg"}
					  ];
  	$scope.fetchAllGroups = function(){  
  		$scope.loadIndex = 8;		
		$scope.allgroups  = $scope.groups;
  	};

  	$scope.showMore = function() {
		var content = $scope.groups.length;
		if ($scope.loadIndex < content) {
		  $scope.loadIndex += 2;
		}
	};

	$scope.detailGroups = function(id){
		$.each($scope.groups, function(i, item) {
			if(item.id == id){
				$scope.detailgroups = item;
			}
		});
	};

}])
