<?php
	class IsLoanLateBehavior extends ModelBehavior {

		function IsLoanLate(Model $Model, $planned_return_date, $actual_return_date) {
			
			$obj_planned_return_date = new DateTime($planned_return_date);
			$obj_actual_return_date = new DateTime($actual_return_date);
			
			$interval = $obj_actual_return_date->diff($obj_planned_return_date);
			
			// if the result is negativ, so the loan was return after the planned date
			if($interval->invert AND $this->DateFormat($interval) != FALSE) {
				return $this->DateFormat($interval);
			}
			else {
				// Returned before planned date or for less than a minute after
				return 'Rendu à la date convenue';
			}
		}

		/**
		 * function DateFormat
		 * 
		 * object(DateInterval)[80]
		 *  public 'y' => int 0
		 *  public 'm' => int 0
		 *  public 'd' => int 10
		 *  public 'h' => int 15
		 *  public 'i' => int 6
		 *  public 's' => int 17
		 *  public 'invert' => int 1
		 *  public 'days' => int 10
		 *
		 * Possible cases :
		 *	1) 1 minute
		 *	2) 59 minutes
		 *	3) 23 heures et 1 minute
		 *  4) 23 heures et 59 minutes
 		 *	5) 1 jour et 1 heure
 		 *	6) 1 jour et 23 heures
 		 *	7) 30 jours et 1 heure
 		 *	8) 30 jours et 23 heures
 		 *	9) 11 mois et 1 jour
 		 *	10) 11 mois et 3 jours
 		 * 	11) 1 année, 2 mois et 1 jour
 		 * 	12) 1 année, 2 mois et 3 jours
 		 *	13) 2 années, 2 mois et 1 jour
		 *	14) 2 années, 2 mois et 3 jours
		 */
		function DateFormat($interval) {
			if($interval->y > 0) {
				return $this->pluralize($interval->y, 'année').', '.$interval->m.' mois, '.$this->pluralize($interval->d, 'jour');
			}
			elseif($interval->m > 0) {
				return $interval->m.' mois, '.$this->pluralize($interval->d, 'jour');
			}
			elseif($interval->d > 0) {
				return $this->pluralize($interval->d, 'jour').', '.$this->pluralize($interval->h, 'heure');
			}
			elseif($interval->h > 0) {
				return $this->pluralize($interval->h, 'heure').', '.$this->pluralize($interval->i, 'minute');
			}
			elseif($interval->i > 0) {
				return $this->pluralize($interval->i, 'minute');
			}
			else {
				return FALSE;
			}
		} /* END function DateFormat  */


		/**
		 * function pluralize
		 * 
		 **/
		function pluralize($count, $text) {
			return $count . (($count == 1) ? (" $text") : (" ${text}s"));
		} /* END function pluralize  */
	}
?>