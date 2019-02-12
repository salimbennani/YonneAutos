<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'var_dumper.command.server_dump' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Command\\ServerDumpCommand.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Server\\DumpServer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\DumpDescriptorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\CliDescriptor.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\HtmlDescriptor.php';

$a = new \Symfony\Bridge\Monolog\Logger('debug');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

$this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Component\VarDumper\Command\ServerDumpCommand(new \Symfony\Component\VarDumper\Server\DumpServer('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.cli_dumper'] ?? ($this->privates['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0)))), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

$instance->setName('server:dump');

return $instance;
