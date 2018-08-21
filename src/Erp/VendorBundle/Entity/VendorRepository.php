<?php

namespace Erp\VendorBundle\Entity;

/**
 * VendorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VendorRepository extends \Doctrine\ORM\EntityRepository
{
    public function getVendorQuery() {
        $qb = $this->createQueryBuilder('a')->orderBy('a.id', 'DESC');

        return $qb->getQuery();
    }

    public function getVendorList() {
        $result = $this->createQueryBuilder('a')->orderBy('a.name', 'ASC')->getQuery()->getArrayResult();

        $vendor_list = array();

        foreach ($result as $item) {
            $vendor_list[$item['id']] = $item['name'];
        }

        return $vendor_list;
    }
}