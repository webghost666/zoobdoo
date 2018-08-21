<?php

namespace Erp\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CityRepository extends EntityRepository
{
    /**
     * Get USA states QueryBuilder
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getStatesQb()
    {
        $states = $this->createQueryBuilder('c')
            ->addGroupBy('c.stateCode');

        return $states;
    }

    /**
     * Get cities
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getCities()
    {
        $cities = $this->createQueryBuilder('c')
            ->orderBy('c.name', 'ASC');

        return $cities;
    }

    /**
     * Get cities by state QueryBuilder
     *
     * @param $stateCode
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getCitiesByStateCodeQb($stateCode)
    {
        $cities = $this->createQueryBuilder('c')
            ->where('c.stateCode = \'' . $stateCode . '\'')
            ->orderBy('c.name', 'ASC');

        return $cities;
    }
}
