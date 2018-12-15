<?php

namespace controller;

use dao\LeaseDAO;
use domain\Lease;
use http\HTTPException;
use http\HTTPStatusCode;
use router\Router;
use service\LeaseServiceImpl;
use view\LayoutRendering;
use view\TemplateView;

/**
 * Created by PhpStorm.
 * User: Victoria Villar
 * Date: 07/12/2018
 * Time: 17:39
 */
class LeaseController{


    public static function leaseView()
    {
        try {

            $contentView = new TemplateView("lease.php");
            $contentView->leases = (new LeaseDAO())->getAllLeases();
            LayoutRendering::basicLayout($contentView);

            /*
            $contentView = new TemplateView("lease.php");
            $contentView->leases = (new LeaseServiceImpl())->findAllLeases();
            LayoutRendering::basicLayout($contentView);
*/
        } catch (HTTPException $e) {
            HTTPStatusCode::HTTP_401_UNAUTHORIZED;

        }
    }

    public static function leaseUpdateOrCreate()
    {

        $lease = new Lease();
        $lease->setLeaseid($_POST["id"] ?? 0);
        $lease->setLeasemonthylrent($POST["leasymonthlyrent"] ?? 0);
        $lease->setLeaseutilities($POST["leasymonthlyrent"] ?? 0);
        $lease->setLeasepaymentmethod($POST["leasepaymentmethod"] ?? "");
        $lease->setLeasedeposit($POST["leasedeposit"] ?? 0);
        $lease->setLeasestart($POST["leasestart"] ?? null);
        $lease->setLeaseend($POST["leaseend"] ?? null);
        $lease->setPropertytablePropertyid($POST["propertytable_propertyid"] ?? null);
        $lease->setTenttableTenantid($POST["tenttable_tenantid"] ?? null);

        try {
            if ($lease->getLeaseid() == 0) {
                (new LeaseServiceImpl())->createLease($lease);

                return true;
            } else {
                (new LeaseServiceImpl())->updateLease($lease);

            }
            Router::redirect("/lease");

        } catch (HTTPException $e) {
        }

    }

    public static function delete(){

    }

    public static function createForm()
    {
        $id = $_GET["id"] ?? 0;
        try {
            $contentView = new TemplateView("lease_form.php");
            if ($id != 0) {
                $contentView->lease = (new LeaseDAO())->getLeaseById($id);
            }
            LayoutRendering::basicLayout($contentView);
        } catch (HTTPException $e) {
            HTTPStatusCode::HTTP_401_UNAUTHORIZED;
        }
    }

}