<?php

namespace Emdrive\Command;

/**
 * Interface DeploymentCommandIterface
 *
 * @mixin \Symfony\Component\Console\Command\Command
 *
 * @package Emdrive\Command
 */
interface DeploymentCommandIterface
{
    /**
     * Get deploy priority
     * Higher gets first
     * @return int
     */
    public function getDeployPriority();
}