<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @copyright  Copyright (c) 2014 - 2015 Benjamin BALET
 */

class Help {

    /**
     * Access to CI framework so as to use other libraries
     * @var type Code Igniter framework
     */
    private $CI;

    /**
     * Default constructor
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->helper('language');
        $this->CI->load->library('session');
        $this->CI->lang->load('global', $this->CI->session->userdata('language'));
    }

    /**
     * Test if a help page is available and returns a help link if so
     * @param string $page name of a page of the application
     * @return string link to Help page or empty string
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function create_help_link($page) {
        if (lang($page) != "") {
            return '&nbsp;' .
                      '<a href="' . lang($page) . '"' .
                      ' title="' . lang('global_link_tooltip_documentation') . '"' .
                      ' target="_blank" rel="nofollow"><i class="icon-question-sign"></i></a>';
        } else {
            return '';
        }        
    }

    /**
     * NOT USED AT THE MOMENT. MIGHT BE USED LATER
     * @param string $page name of a page of the application
     * @return string Default Help link
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function get_default_help_page($page) {
        if (lang('global_link_doc_page_calendar_organization') == "") {
            $defaut['global_link_doc_page_calendar_organization'] = 'http://jorani.org/page-calendar-organization.html';
            $defaut['global_link_doc_page_my_summary'] = 'http://jorani.org/page-my-summary.html';
            $defaut['global_link_doc_page_request_leave'] = 'http://jorani.org/how-to-request-a-leave.html';
            $defaut['global_link_doc_page_edit_leave_type'] = 'http://jorani.org/edit-leave-types.html';
            $defaut['global_link_doc_page_hr_organization'] = 'http://jorani.org/page-describe-organization.html';
            $defaut['global_link_doc_page_reset_password'] = 'http://jorani.org/how-to-change-my-password.html';
            $defaut['global_link_doc_page_leave_validation'] = 'http://jorani.org/page-leave-requests-validation.html';
            $defaut['global_link_doc_page_login'] = 'http://jorani.org/page-login-to-the-application.html';
            $defaut['global_link_doc_page_create_user'] = 'http://jorani.org/page-create-a-new-user.html';
            $defaut['global_link_doc_page_list_users'] = 'http://jorani.org/page-list-of-users.html';
            $defaut['global_link_doc_page_list_employees'] = 'http://jorani.org/page-list-of-employees.html';
            /*if (array_key_exists($page, $defaut)) {
                return "";
            } else {
                return "http://jorani.org/";
            }
             */            
        }
    }

}
