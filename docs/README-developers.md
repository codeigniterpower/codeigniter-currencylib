# Development notes

For general info check [README.md](README.md), 
remembered our [../CONTRIBUTING.md](../CONTRIBUTING.md) rules.

## Development Environment

* **The library** as in [clib](clib) its just two files, the config 
file `config/currencylib.php` and the class lib `library/Currencylib.php`, 
put those in respective places in your codeigniter project and just start 
to use, it has two methos, `getOneCurrencyByApi(<from>, <to>, <amount>)` and 
the `getAllCurrencyByApi(<from>, <to>, <date>)` the first one just retreive all the 
converted currency froma  base ne, the second just convert from the base to 
the listed comma separated ones but using unit currency at current date.

* **The manager** as in [cweb](cweb) its just a CI manager, just integrate 
the codeigniter framework and configure the database.to start to use the api 
and manage your own databases of currencies. This project also is a example 
of who usefully can be an web interface and also will provide your own apy 
to gest history currency set by you. Usefully if you dont want to pay the 
apilayer and wants an internal intranet currency manager.

### Deploy in localhost

The application does not used rewrite of the URLs, this for better compatibility, 
also easy deploy, security its nto based in such stupid **index.php url hidding**, 
its based in better deploy of the web application, by example a good deploy of 
the api later.

To deploy in localhost you only need a running php environment and a directory 
were the files can be put to be interpreted with the web server.

For further information about how to deploy read [README.md#deploy](README.md#deploy)

### Development framework choice

We choose php and CI2/CI3 due several reasons but two are the most important:

* Understanding of CI2/CI3 does not need OOP knowledge, so many people 
just can read and understand the code more faster that using other frameworks.
* Others frameworks only provide open source DBMS connection and 
inclusively has limited support for PostgreSQL and SQlite, just the Mysql
* Check [Database compatibility](#database-compatibility) for DBMS related 
issues about such reasons

Lavarel is not difficult but it requires that the hired employee knows OOP, 
which translates into a very xpensives salary and money, while CI2/CI3 only 
requires that you know how to loop and minimal knowledge of conditionals, 
simple and easy to assimilate.. important key when we talk about money.

## Development notes

### DB models

**Usuario_m**

This model just retrieve the data of a user, the user credentials are not 
stored, login are managed agains IMAP or external source.. 

The table stored the session and will check if are still valid, when time out, 
will retry the login and refrsh the session into the table.

The permission are simple: if are enabled, can make modifications, either 
then just can read the currency rates.

**Currency_m**

The first used method is the `readCurrenciesTodayStored` that permits to get 
a list of current currencies with minimal filters, with support for server side:

```
 // get VES bolivares currencies on assumed date today but using base USD dollar
$currency_list_dbarray = $this->dbcm->readCurrenciesTodayStored('VES', NULL, 'USD');

 // get VES bolivares currencies from the given date string, YYYYMMDD[HH] you can get specific hour optional
$currency_list_dbarray = $this->dbcm->readCurrenciesTodayStored('VES','20230201');

 // get all the currencies from the given date string, YYYYMMDD[HH] you can get specific hour optional
$currency_list_dbarray = $this->dbcm->readCurrenciesTodayStored(NULL,'20230201');

 // send a filter directly over the currency table, filtering by the cod_tasa column value
$currency_list_dbarray = $this->dbcm->getTasas(array('cod_tasa'=>'2023020110'));
```

The second method is the `readCurrenciesHistStored`, with support for server side:


```
		$currency_list_dbarrayhis = array();
		$currency_list_dbarraycou = array();
		$this->load->model('Currency_m','dbcm');
		$parameters = array();
		// case 1 only count all the history for a specific date, first 100 rows, ordering by cod_tasa ascending
		$parameters['fecha'] = '20230207'
		$howmany = 100;
		$iniciar = 0;
		$ordercol = 'cod_tasa';
		$sorting = 'ASC';
		$countall = TRUE;
		$currency_list_dbarraycou = $this->dbcm->readCurrenciesHistStored($parameters,$howmany,$iniciar,$ordercol,$sorting,$countall);
		// case 2 get all the history for a specific date, first 100 rows, ordering by cod_tasa ascending
		$parameters['fecha'] = '20230207'
		$howmany = 100;
		$iniciar = 0;
		$ordercol = 'cod_tasa';
		$sorting = 'ASC';
		$countall = NULL;
		$currency_list_dbarrayhis = $this->dbcm->readCurrenciesHistStored($parameters,$howmany,$iniciar,$ordercol,$sorting,$countall);

		$totalcount = 0;
		if(is_array($currency_list_dbarrayhis))
		{
			$totalcount = count($currency_list_dbarrayhis);
		}
		if(is_array($currency_list_dbarraycou))
		{
			if(count($currency_list_dbarraycou))
				$totalcount = $currency_list_dbarraycou[]['cod_tasa'];
		}
```

### views notes

#### those view have a relationship

* Header
* Footer 
* Menu 

A mayor detail .. first releases will need that 
the header opens a general div container:

```
 <div class="container-fluid">
        <div class="row flex-nowrap">
```

Those will and must be closed at the footer or/and menu:

```
    </div>
</div>
```

This will be not necesary in future development of views.

#### If you uses menu view, dont use footer one

In such cases you must close as:

```
      <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
        echo link_js("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", 'integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"  crossorigin="anonymous"');
      ?>
  </body>
</html>
```

## Database compatibility

**Currency manager is compatible with any database engine**, that's 
another reason we choose Codeigniter 3 / Codeigniter 2 as framework 
for backend, those are the only framework that provides minimal ODBC 
compatibilty, and permits to customize manual SQL querys.

Others frameworks does not have any compatibilty with mayor 
database providers, neither have good ODBC compatibilty layer, by 
example broken aliasing for columns in Sybase ASE.

### SQL script DB

The SQL script only creates the tables, so means you should create and 
setup the DB schema, by example if you will use MySQL/Percona/MariaDB you 
sould previoously do `CREATE SCHEMA elcurrencydb DEFAULT CHARACTER SET utf8mb4 ;` 
in the MySQL case, cos PostgreSQL already supports multilang charset.

### Database schema desing

we use workbench to produce and desing the schema but the schema 
is just **full compatible with any other DB**, if error try to just 
remove the `ENGINE` lines (and only in sqlite cases removes 
the `COMMENT` part and you will get it).

* `elcurrencydb.png` [elcurrencydb.png](elcurrencydb.png)
* `elcurrencydb.mwb` [elcurrencydb.mwb](elcurrencydb.mwb)
* `elcurrencydb.sql` [elcurrencydb.sql](elcurrencydb.sql)


## Deploy

TODO

