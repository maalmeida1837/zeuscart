<?php
/**
* GNU General Public License.

* This file is part of ZeusCart V2.3.

* ZeusCart V2.3 is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* ZeusCart V2.3 is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with Foobar. If not, see <http://www.gnu.org/licenses/>.
*
*/

/**
 * MDisplayCategoryList
 *
 * This class contains functions to display the list of categories available
 * 
 * @package		Model_MDisplayCategoryList
 * @category	Model
 * @author		ZeusCart Team
 * @link		http://www.zeuscart.com
 * @version 	2.3
 */

// ------------------------------------------------------------------------


class Model_MDisplayCategoryList
{
	
	/**
	 * Stores the output
	 *
	 * @var array $output
	 */	
	 
	var $output = array();	
	
	
	/**
	 * Function displays the list of categories available  
	 * at the admin side   
	 * 
	 * @return array
	 */
	
	function dispCategory()
	{
		include('classes/Core/CDisplayCategoryList.php');
		include('classes/Display/DDisplayCategoryList.php');		
		include('classes/Core/CAdminHome.php');
		$output['username']=Core_CAdminHome::userName();
		$output['currentDate']=date('l, M d, Y H:i:s');	
		$output['currency_type']=$_SESSION['currency']['currency_tocken'];			
		$output['monthlyorders']= (int)Core_CAdminHome::monthlyOrders();
		$output['previousmonthorders']=(int)Core_CAdminHome::previousMonthOrders();
		$output['totalorders']=(int)Core_CAdminHome::totalOrders();
		$output['currentmonthuser']=(int)Core_CAdminHome::currentMonthUser();
		$output['previousmonthuser']=(int)Core_CAdminHome::previousMonthUser();
		$output['totalusers']=(int)Core_CAdminHome::totalUsers();
		$output['currentmonthincome']=Core_CAdminHome::currentMonthIncome();
		$output['previousmonthincome']=Core_CAdminHome::previoustMonthIncome();
		$output['totalincome']=Core_CAdminHome::totalIncome();
		$output['currentmonthproudctquantity']=(int)Core_CAdminHome::currentMonthProudctQuantity();
		$output['previousmonthproudctquantity']=(int)Core_CAdminHome::previousMonthProudctQuantity();
		$output['totalproudctquantity']=(int)Core_CAdminHome::totalProudctQuantity();
		$output['lowstock']=Core_CAdminHome::lowStock();
		$output['totalproducts']=Core_CAdminHome::totalProducts();		
		$output['enabledproducts']=Core_CAdminHome::enabledProducts();
		$output['disabledproducts']=Core_CAdminHome::disabledProducts();
		i$output['displaycategory'] =   Core_CDisplayCategoryList::dispCategory();		
		$output['pendingorders']=(int)Core_CAdminHome::pendingOrders();
		$output['processingorders']=(int)Core_CAdminHome::processingOrders();
		$output['deliveredorders']=(int)Core_CAdminHome::deliveredOrders();		

		Bin_Template::createTemplate('DisplayCategoryList.html',$output);
	}	
}
?>