<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // transporte_transporte_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'transporte_transporte_default_index')), array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/marca')) {
            // marca
            if (rtrim($pathinfo, '/') === '/marca') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_marca;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'marca');
                }

                return array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::indexAction',  '_route' => 'marca',);
            }
            not_marca:

            // marca_create
            if ($pathinfo === '/marca/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_marca_create;
                }

                return array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::createAction',  '_route' => 'marca_create',);
            }
            not_marca_create:

            // marca_new
            if ($pathinfo === '/marca/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_marca_new;
                }

                return array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::newAction',  '_route' => 'marca_new',);
            }
            not_marca_new:

            // marca_show
            if (preg_match('#^/marca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_marca_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_show')), array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::showAction',));
            }
            not_marca_show:

            // marca_edit
            if (preg_match('#^/marca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_marca_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_edit')), array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::editAction',));
            }
            not_marca_edit:

            // marca_update
            if (preg_match('#^/marca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_marca_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_update')), array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::updateAction',));
            }
            not_marca_update:

            // marca_delete
            if (preg_match('#^/marca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_marca_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_delete')), array (  '_controller' => 'Transporte\\TransporteBundle\\Controller\\MarcaController::deleteAction',));
            }
            not_marca_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
