var $table = $('#verhaaltjes');
     $table.bootstrapTable({
	      url: 'http://lettervandekapstok.be/verhaaltjes.php',
	      striped: true,
	      pagination: true,
	      pageSize: 20,
	      pageList: [20, 40, 60, 100, 200],
          minimumCountColumns: 2,
          clickToSelect: true,
	      columns: [
	      {
	          field: 'titel',
	          title: 'titel',
	          align: 'left',
	          width: "150"
	      },
	      {
	          field: 'link',
	          title: 'link',
	          align: 'left',
	          width: "100"
	      },
	        {
	          field: 'datum',
	          title: 'datum',
	          align: 'left',
	          width: "100"
	      },
	        {
	          field: 'genre',
	          title: 'genre',
	          align: 'left',
	          width: "150"
	      },
	      ]
  	 });
